<?php

namespace App\Http\Controllers\Front;

use App\Models\AboutUs;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index(AboutUs $aboutUsModel): View
    {
        $about_us = $aboutUsModel->first();
        return view('front.about_us.about', compact('about_us'));
    }
}
