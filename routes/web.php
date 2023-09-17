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
use App\Http\Controllers\Front\TermsConditionController;
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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    #### Index Home ####
    Route::get('/', [HomeController::class, 'index'])->name('home');

    #### About Us ####
    Route::get('about_us', [AboutUsController::class, 'index'])->name('about_us');

    #### Services ####
    Route::get('services', [ServiceController::class, 'index'])->name('services');
    Route::get('/search', [ServiceController::class, 'search'])->name('searchCategory');
    Route::post('/review/store', [ServiceController::class, 'storeReview'])->name('review.store');
    Route::put('/reviews/update-status/{id}', [ServiceController::class, 'updateStatus'])->name('reviews.update-status');

    Route::get('services/category/page/{category}', [ServiceController::class, 'getSingleService'])->name('getSingleService');


    #### Galleries ####
    Route::get('galleries/{page?}', [GalleryController::class, 'index'])->name('galleries');

    #### Contacts ####
    Route::get('contacts', [ContatcController::class, 'index'])->name('contacts');
    Route::post('/contact/store', [ContatcController::class, 'storeContact'])->name('contact.store');


    #### Faqs ####
    Route::get('faqs', [FaqController::class, 'index'])->name('faqs');

    #### Privacy Policy ####
    Route::get('privacy_policy', [PrivacyPolicyController::class, 'index'])->name('privacy_policy');

    #### Terms Condition ####
    Route::get('terms_condition', [TermsConditionController::class, 'index'])->name('terms_condition');


    #### get pages as categories ####
    Route::get('getService',[HomeController::class,'getService'])->name('getService');

});

    Route::view('/thanks','front.layouts.thanks');
    Route::view('/404','errors.404');
    Route::view('/500','errors.500');


