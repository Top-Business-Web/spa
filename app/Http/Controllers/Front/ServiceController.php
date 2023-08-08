<?php

namespace App\Http\Controllers\Front;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;

class ServiceController extends Controller
{
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
}
