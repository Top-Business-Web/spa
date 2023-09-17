<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    public function index()
    {
        return view('front.terms_condition.terms_condition');
    }
}
