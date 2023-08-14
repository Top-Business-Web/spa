<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\PageStoreRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Models\Category;

class PageController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $pages = Page::latest()->get();
            return Datatables::of($pages)
                ->addColumn('action', function ($pages) {
                    return '
                                <button type="button" data-id="' . $pages->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $pages->id . '" data-title="' . $pages->title . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('top_description', function ($pages) {
                    return '<td>' . Str::limit($pages->top_description, 50) . '</td>';
                })
                ->editColumn('down_description', function ($pages) {
                    return '<td>' . Str::limit($pages->down_description, 50) . '</td>';
                })
                ->editColumn('category_id', function ($pages) {
                    return '<td>' . $pages->category->title . '</td>';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/pages/index');
        }
    }


    public function create()
    {
        $categories = Category::query()->select('id', 'title')->get();
        return view('admin.pages.parts.create', compact('categories'));
    }
    // end  of create

    // Store Start
    public function store(PageStoreRequest $request)
    {
        try {
            $inputs = $request->validated();

            $page = Page::create($inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }
    // Store End


    public function edit(Page $page)
    {
        $categories = Category::query()->select('id', 'title')->get();
        return view('admin.pages.parts.edit', compact('page', 'categories'));
    }
    // end  of edit

    public function update(PageUpdateRequest $request, Page $page)
    {
        try {
            $inputs = $request->validated();

            $page->update($inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }

    public function destroy(Request $request)
    {
        $page = Page::where('id', $request->id)->first();
        $page->delete();
        return response(['message' => 'Deleted successfully', 'status' => 200], 200);
    }
    //end of delete
}
