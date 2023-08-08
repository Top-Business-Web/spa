<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gellary;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index($page = 1): View
    {
        $perPage = 9;
        $offset = ($page - 1) * $perPage;
        $gellaries = Gellary::skip($offset)->take($perPage)->get();
        $numPages = ceil(Gellary::count() / $perPage);
        return view('front.galleries.gallery', compact('gellaries', 'numPages', 'page'));
    }
}
