<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatcController extends Controller
{
    public function index()
    {
        return view('front.contacts.contact');
    }
}
