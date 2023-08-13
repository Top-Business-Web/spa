<?php

namespace App\Http\Controllers\Front;

use App\Models\Slider;
use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display the front page with sliders and AboutUs.
     *
     * @param Slider $sliderModel
     * @param AboutUs $aboutUsModel
     * @param Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function index(Slider $sliderModel, AboutUs $aboutUsModel, Category $categoryModel): View
    {
        $sliders = $sliderModel->all();
        $about_us = $aboutUsModel->first();
        $categoriesTop = Category::orderBy('view', 'desc')->take(6)->get();
        $categories = $categoryModel->select('id', 'title', 'description')
            ->where('top', 1)
            ->latest()
            ->take(8)
            ->get();
        return view('front.index', compact('sliders', 'about_us', 'categories', 'categoriesTop'));
    }
}
