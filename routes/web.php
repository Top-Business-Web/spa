<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\ContatcController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\PrivacyPolicyController;
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

#### Index Home ####
Route::get('Home', [HomeController::class, 'index'])->name('home');

#### About Us ####
Route::get('about_us', [AboutUsController::class, 'index'])->name('about_us');

#### Services ####
Route::get('services', [ServiceController::class, 'index'])->name('services');

#### Galleries ####
Route::get('galleries', [GalleryController::class, 'index'])->name('galleries');

#### Contacts ####
Route::get('contacts', [ContatcController::class, 'index'])->name('contacts');

#### Faqs ####
Route::get('faqs', [FaqController::class, 'index'])->name('faqs');

#### Privacy Policy ####
Route::get('privacy_policy', [PrivacyPolicyController::class, 'index'])->name('privacy_policy');

