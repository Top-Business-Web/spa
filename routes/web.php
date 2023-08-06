<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\FaqsController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\QuoteController;
use App\Http\Controllers\Front\CareerController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\ServiceController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route to clear the application cache
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('optimize:clear');

    return 'Cache cleared successfully.';
});

Route::get('/', function() {
    return view('front.index');
});

