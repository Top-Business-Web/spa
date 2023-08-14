<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function index($page){
        if($page == "subscribe"){
            $data = (new \App\Http\Helper\GlobalSelection)->availableRows(9);
            return view('site.Youtube.subscribes', compact('data'));
        }
        elseif($page == "likes"){
            $data = (new \App\Http\Helper\GlobalSelection)->availableRows(10);
            return view('site.Youtube.likes', compact('data'));
        }
        elseif($page == "views"){
            $data = (new \App\Http\Helper\GlobalSelection)->availableRows(11);
            return view('site.Youtube.views', compact('data'));
        }
        else{
            abort(404);
        }
    }
}
