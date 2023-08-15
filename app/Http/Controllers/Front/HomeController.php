<?php

namespace App\Http\Controllers\Front;

use App\Models\Offer;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display the front page with sliders and AboutUs, Category and Offer.
     *
     * @param Slider $sliderModel
     * @param AboutUs $aboutUsModel
     * @param Category $categoryModel
     * @param Offer $offerModel
     * @return \Illuminate\View\View
     */
    public function index(Slider $sliderModel, AboutUs $aboutUsModel, Category $categoryModel, Offer $offerModel): View
    {
        $sliders = $sliderModel->all();
        $about_us = $aboutUsModel->first();
        $categoriesTop = Category::orderBy('view', 'desc')->take(6)->get();
        $categories = $categoryModel->select('id', 'title', 'description')
            ->where('top', 1)
            ->latest()
            ->take(8)
            ->get();
        $offers = $offerModel->select('title', 'description')->get();
        return view('front.index', compact('sliders', 'about_us', 'categories', 'categoriesTop', 'offers'));
    }
}
