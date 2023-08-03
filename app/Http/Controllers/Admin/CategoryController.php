<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Service;

class CategoryController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $categories = Category::latest()->get();
            return Datatables::of($categories)
                ->addColumn('action', function ($categories) {
                    return '
                                <button type="button" data-id="' . $categories->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $categories->id . '" data-title="' . $categories->title . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('description', function ($categories) {
                    return '<td>' . Str::limit($categories->description, 50) . '</td>';
                })
                ->editColumn('image', function ($categories) {
                    return '
                    <img alt="image" onclick="window.open(this.src)" class="avatar avatar-md rounded-circle" src="' . asset('uploads/admins/categories/' . $categories->image) . '">
                    ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin/categories/index');
        }
    }


    public function create()
    {
        $services = Service::query()->select('id', 'title')->get();
        return view('admin.categories.parts.create', compact('services'));
    }
    // end  of create

    // Store Start
    public function store(CategoryStoreRequest $request)
    {
        try {
            $inputs = $request->validated();

            if ($request->hasFile('image')) {
                $inputs['image'] = $this->saveImage($request->file('image'), 'uploads/admins/categories');
            }

            $slider = Category::create($inputs);

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

        return $imageName;
    }
    // Save Image

    public function edit(Category $category)
    {
        $services = Service::query()->select('id', 'title')->get();
        return view('admin.categories.parts.edit', compact('category', 'services'));
    }
    // end  of edit

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        try {
            $inputs = $request->validated();

            if ($request->hasFile('image')) {
                if ($category->image && file_exists(public_path('uploads/admins/categories/') . $category->image)) {
                    unlink(public_path('uploads/admins/categories/') . $category->image);
                }
                $inputs['image'] = $this->saveImage($request->file('image'), 'uploads/admins/categories');
            } else {
                unset($inputs['image']);
            }

            $category->update($inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }

    public function destroy(Request $request)
    {
        $category = Category::where('id', $request->id)->first();
        $category->delete();
        return response(['message' => 'Deleted successfully', 'status' => 200], 200);
    }
    //end of delete
}
