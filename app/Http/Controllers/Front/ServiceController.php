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

    public function getSingleService(Category $category, Page $pageModel)
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
        return view('front.services.service_details', compact('page', 'allCategories', 'relatedCategories'));
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
}
