<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Review;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewStoreRequest;
use App\Http\Requests\ReviewUpdateRequest;

class ReviewController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $reviews = Review::latest()->get();
            return Datatables::of($reviews)
                ->addColumn('action', function ($reviews) {
                    return '
                                <button type="button" data-id="' . $reviews->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $reviews->id . '" data-title="' . $reviews->name . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->editColumn('status', function ($reviews) {
                    $checked = $reviews->status == 1 ? 'checked' : '';
                    return '<td><input type="checkbox" data-review-id="' . $reviews->id . '" class="form-check-input status-checkbox" style="transform: scale(1.5); ' . $checked . '"></td>';
                })
                ->editColumn('description', function ($reviews) {
                    return '<td>' . Str::limit($reviews->description, 50) . '</td>';
                })
                ->editColumn('page_id', function ($reviews) {
                    return '<td>' . $reviews->page->top_title . '</td>';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin/reviews/index');
        }
    }


    // public function create()
    // {
    //     $pages = Page::query()->select('id', 'top_title')->get();
    //     return view('admin.reviews.parts.create', compact('pages'));
    // }
    // end  of create

    // Store Start
    // public function store(ReviewStoreRequest $request)
    // {
    //     try {
    //         $inputs = $request->validated();

    //         $review = Review::create($inputs);

    //         return response()->json(['status' => 200]);
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => 405]);
    //     }
    // }
    // Store End


    public function edit(Review $review)
    {
        $pages = Page::query()->select('id', 'top_title')->get();
        return view('admin.reviews.parts.edit', compact('review', 'pages'));
    }
    // end  of edit

    // public function update(ReviewUpdateRequest $request, Review $review)
    // {
    //     try {
    //         $inputs = $request->validated();

    //         $review->update($inputs);

    //         return response()->json(['status' => 200]);
    //     } catch (\Exception $e) {
    //         return response()->json(['status' => 405]);
    //     }
    // }

    public function destroy(Request $request)
    {
        $review = Review::where('id', $request->id)->first();
        $review->delete();
        return response(['message' => 'Deleted successfully', 'status' => 200], 200);
    }
    //end of delete
}
