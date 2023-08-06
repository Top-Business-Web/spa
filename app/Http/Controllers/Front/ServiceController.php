<?php

namespace App\Http\Controllers\Front;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::query()->get();
        return view('front.services.services', compact('services'));
    }

    public function getSingleService(Category $category)
    {
        $page = Page::where('category_id', $category->id)->first();
        return view('front.services.service_details', compact('page'));
    }
}
