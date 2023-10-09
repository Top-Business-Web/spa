<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderStoreRequest;
use App\Http\Requests\SliderUpdateRequest;

class SliderController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $sliders = Slider::latest()->get();
            return Datatables::of($sliders)
                ->addColumn('action', function ($sliders) {
                    return '
                                <button type="button" data-id="' . $sliders->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $sliders->id . '" data-title="' . $sliders->title . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('description', function ($sliders) {
                    return '<td>' . Str::limit($sliders->description, 50) . '</td>';
                })
                ->editColumn('image', function ($sliders) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset('uploads/admins/sliders/'.$sliders->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/sliders/index');
        }
    }


    public function create()
    {
        return view('admin.sliders.parts.create');
    }
    // end  of create

    // Store Start
    public function store(SliderStoreRequest $request)
    {
        // try {
            $inputs = $request->validated();

            if ($request->hasFile('image')) {
                $inputs['image'] = $this->saveImage($request->file('image'), 'uploads/admins/sliders');
            }

            $slider = Slider::create($inputs);

            return response()->json(['status' => 200]);
        // } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        // }
    }
    // Store End

    // Save Image
    private function saveImage($image, $destination)
    {
        $imageName = $image->getClientOriginalName();
        $image->move($destination, $imageName);
        return $imageName;
    }
    // Save Image

    public function edit(Slider $slider)
    {
        return view('admin.sliders.parts.edit', compact('slider'));
    }
    // end  of edit

    public function update(SliderUpdateRequest $request, Slider $slider)
    {
        try {
            $inputs = $request->validated();

            if ($request->hasFile('image')) {
                if ($slider->image && file_exists(public_path('uploads/admins/sliders') . $slider->image)) {
                    unlink(public_path('uploads/admins/sliders') . $slider->image);
                }
                $inputs['image'] = $this->saveImage($request->file('image'), 'uploads/admins/sliders');
            } else {
                unset($inputs['image']);
            }

            $slider->update($inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }

    public function destroy(Request $request)
    {
        $slider = Slider::where('id', $request->id)->first();
        $slider->delete();
        return response(['message' => 'Deleted successfully', 'status' => 200], 200);
    }
    //end of delete
}
