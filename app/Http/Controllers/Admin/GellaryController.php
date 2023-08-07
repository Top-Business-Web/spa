<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gellary;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleriesStoreRequest;
use App\Http\Requests\GalleriesUpdateRequest;

// Index Start
class GellaryController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $gellaries = Gellary::latest()->get();
            return Datatables::of($gellaries)
                ->addColumn('action', function ($gellaries) {
                    return '
                                <button type="button" data-id="' . $gellaries->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $gellaries->id . '" data-title="' . $gellaries->title . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('image', function ($gellaries) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset($gellaries->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin/gellaries/index');
        }
    }
    // Index End


    // Create Start
    public function create()
    {
        return view('admin.gellaries.parts.create');
    }
    // Create End

    // Store Start
    public function store(GalleriesStoreRequest $request)
    {
        try {
            $inputs = $request->validated();

            if ($request->hasFile('image')) {
                $inputs['image'] = $this->saveImage($request->file('image'), 'uploads/admins/galleries');
            }

            // Correct the model name to "Gallery"
            $gallery = Gellary::create($inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }
    // Store End

    // Save Image
    private function saveImage($image, $destination)
    {
        $imageName = $image->getClientOriginalName();
        $image->move($destination, $imageName);

        return $destination . '/' . $imageName; // Return the full image path
    }
    // Save Image

    // Start Edit
    public function edit(Gellary $gellary)
    {
        return view('admin.gellaries.parts.edit', compact('gellary'));
    }
    // end  of edit

    // end  of Update
    public function update(GalleriesUpdateRequest $request, Gellary $gellary)
    {
        try {
            $inputs = $request->validated();

            if ($request->hasFile('image')) {

                if ($gellary->image && file_exists(public_path('uploads/admins/gellary/') . $gellary->image)) {
                    unlink(public_path('uploads/admins/gellary/') . $gellary->image);
                }
                $inputs['image'] = $this->saveImage($request->file('image'), 'uploads/admins/gellary');
            } else {
                unset($inputs['image']);
            }
            $gellary->update($inputs);
            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }
    // end  of Update

    // end  of delete
    public function destroy(Request $request)
    {
        $contact_us = Gellary::where('id', $request->id)->first();
        $contact_us->delete();
        return response(['message' => 'Deleted successfully', 'status' => 200], 200);
    }
    //end of delete
}
