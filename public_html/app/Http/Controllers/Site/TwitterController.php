<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function tweets(){
        $data = (new \App\Http\Helper\GlobalSelection)->availableRows(5);
        return view('site.Twitter.tweets', compact('data'));
    }

    public function retweets(){
        $data = (new \App\Http\Helper\GlobalSelection)->availableRows(6);
        return view('site.Twitter.retweets', compact('data'));
    }

    public function followers(){
        $data = (new \App\Http\Helper\GlobalSelection)->availableRows(4);
        return view('site.Twitter.followers', compact('data'));
    }

    public function likes(){
        $data = (new \App\Http\Helper\GlobalSelection)->availableRows(8);
        return view('site.Twitter.likes', compact('data'));
    }
}
