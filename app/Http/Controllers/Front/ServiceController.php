<?php

namespace App\Http\Controllers\Front;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewStoreRequest;
use App\Models\Category;
use App\Models\Page;
use App\Models\Review;

class ServiceController extends Controller
{
    // public function test($id)
    // {
    //     $id = 'test';
    //     return view('front.services.service2_details', compact('id'));
    // }
    public function index(Service $serviceModel)
    {
        $services = $serviceModel->get();
        return view('front.services.services', compact('services'));
    }

    public function getSingleService(Category $category, Page $pageModel, Review $reviewModel)
    {
        $page = $pageModel->where('category_id', $category->id)->first();
        $relatedCategories = $category->select('id', 'title', 'description', 'image', 'service_id')
            ->where('service_id', $category->service->id)
            ->where('id', '!=', $category->id) // Exclude the chosen category's ID
            ->latest()
            ->take(3)
            ->get();
        $allCategories = $category->select('id', 'title', 'top')
            ->where('top', 1)
            ->latest()->take(6)->get();
        $reviews = $reviewModel::select('name', 'rate', 'description', 'created_at')
            ->where('page_id', $page->id)
            ->where('status', 1)
            ->get();
        return view('front.services.service_details', compact('page', 'allCategories', 'relatedCategories', 'reviews'));
    }

    public function storeReview(ReviewStoreRequest $request)
    {
        $inputs = $request->all();

        if (Review::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function search(Request $request)
    {
        try {
            $searchTerm = $request->input('q');
            $results = Category::where('title', 'like', '%' . $searchTerm . '%')
                ->select('id', 'title')
                ->get();

            return response()->json($results);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $review = Review::find($id);

        if ($review) {
            $status = $request->input('status');
            $review->status = $status;
            $review->save();

            return response()->json(['status' => 200]);
        }
        return response()->json(['status' => 405]);
    }
}
