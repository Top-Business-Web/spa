<?php

namespace App\Http\Controllers\Front;

use App\Models\Page;
use App\Models\Review;
use App\Models\Service;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewStoreRequest;

class ServiceController extends Controller
{

    public function index(Service $serviceModel)
    {
        $services = $serviceModel->with('category', 'category.page')->get();

        return view('front.services.services', compact('services'));
    }

    public function getSingleService($page, Review $reviewModel): View
    {
        $page = Page::find($page);
        $category = Category::find($page->category_id);
        $relatedCategories = $this->getRelatedCategories($category);
        $pagesRelatedWithCategory = $this->getPagesRelatedCategory($category->id);
        $reviews = $this->getApprovedReviews($page, $reviewModel);
        $reviewCount = $this->getReviewCount($page);

//        $data = ['page' =>$page,
//            'category' =>$category,
//            'relatedCategories' =>$relatedCategories,
//            'pagesRelatedWithCategory' =>$pagesRelatedWithCategory,
//            'reviews' =>$reviews,
//            'reviewCount' =>$reviewCount];
//
//        dd($data);

        return view('front.services.service_details', compact(
            'page',
            'pagesRelatedWithCategory',
            'relatedCategories',
            'reviews',
            'reviewCount'
        ));
    }

    private function getRelatedCategories(Category $category)
    {
        return $category->select('*')
            ->where('service_id', $category->service->id)
            ->where('id', '!=', $category->id)
            ->latest()
            ->take(3)
            ->get();
    }

    private function getPagesRelatedCategory($id)
    {
        return Page::select('*')
            ->where('category_id', '=', $id)
            ->latest()
            ->take(6)
            ->get();
    }

    private function getApprovedReviews(Page $page, Review $reviewModel)
    {
        return $reviewModel::select('name', 'rate', 'description', 'created_at')
            ->where('page_id', $page->id)
            ->where('status', 1)
            ->get();
    }

    private function getReviewCount(Page $page)
    {
        return getRecordCount(Review::class, ['page_id' => $page->id]);
    }


    public function storeReview(ReviewStoreRequest $request)
    {
        $inputs = $request->all();
        $review = Review::create($inputs);

        if ($review) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function search(Request $request)
    {
        try {
            $searchTerm = $request->input('q');
            $results = $this->searchCategories($searchTerm);

            return response()->json($results);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    private function searchCategories($searchTerm)
    {
        return Category::where('title', 'like', '%' . $searchTerm . '%')
            ->select('id', 'title')
            ->get();
    }

    public function updateStatus(Request $request, $id)
    {
        $review = Review::find($id);

        if ($review) {
            $status = $request->input('status');
            $this->updateReviewStatus($review, $status);

            return response()->json(['status' => 200]);
        }

        return response()->json(['status' => 405]);
    }

    private function updateReviewStatus(Review $review, $status)
    {
        $review->status = $status;
        $review->save();
    }
}
