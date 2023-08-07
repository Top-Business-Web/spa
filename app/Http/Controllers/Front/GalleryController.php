<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gellary;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(Gellary $gellaryModel) :View
    {
        $gellaries = $gellaryModel->get();
        return view('front.galleries.gallery', compact('gellaries'));
    }
}
