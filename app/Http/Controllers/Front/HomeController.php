<?php

namespace App\Http\Controllers\Front;

use App\Models\Offer;
use App\Models\Page;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\Category;
use GuzzleHttp\Client;
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
    public function index(Slider $sliderModel, AboutUs $aboutUsModel, Category $categoryModel, Offer $offerModel)
    {
        $sliders = $sliderModel->all();
        $about_us = $aboutUsModel->first();
        $categoriesTop = Category::orderBy('top', 'desc')->take(6)->get();
        $categories = $categoryModel->select('*')
            ->where('top', 1)
            ->with('page')
            ->latest()
            ->take(8)
            ->get();
        $offers = $offerModel->select('*')->get();

        return view('front.index', compact('sliders', 'about_us', 'categories', 'categoriesTop', 'offers'));
    } // end index

    public function getService()
    {
        $client = new Client();
        $baseUrl = env('url_odoo');

        $sessionId = $client->post($baseUrl . '/web/session/authenticate', [
            'json' => [
                'params' => [
                    "db" => "traning",
                    "login" => "admin",
                    "password" => "admin"
                ]
            ],
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ]);
        // Process successful response here
        $sessionCookie = $sessionId->getHeader('Set-Cookie');

        // Extract the session ID from the cookie
        $sessionId = ''; // Initialize a variable to store the session ID
        foreach ($sessionCookie as $cookie) {
            if (strpos($cookie, 'session_id') !== false) {
                preg_match('/session_id=(.*?);/', $cookie, $matches);
                $sessionId = $matches[1];
                break;
            }
        }

        $response = $client->get($baseUrl.'/api/salon.service',[
            'headers' => [
                'Cookie' => 'session_id='.$sessionId,
                'Accept' => 'application/json',
            ]
        ]);
        // Convert the response JSON content to an array
        $responseData = json_decode($response->getBody()->getContents(), true);
       return $responseData['result'];
    }
}
