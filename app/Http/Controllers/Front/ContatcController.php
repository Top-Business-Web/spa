<?php

namespace App\Http\Controllers\Front;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContatcController extends Controller
{
    public function index()
    {
        return view('front.contacts.contact');
    }

    public function storeContact(Request $request)
    {
        $inputs = $request->all();

        if (Contact::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }
}
