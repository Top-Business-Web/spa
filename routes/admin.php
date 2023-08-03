<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/', function () {
        return view('Admin/index');
    })->name('adminHome');

    #### Admins ####
    Route::resource('admins','AdminController');
    Route::POST('delete_admin','AdminController@delete')->name('delete_admin');
    Route::get('my_profile','AdminController@myProfile')->name('myProfile');
    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');


    #### About Us ####
    Route::resource('about_us', AboutUsController::class);

    #### Contacts ####
    Route::resource('contacts', ContactController::class);

    #### Gellaries ####
    Route::resource('gellaries', GellaryController::class);

    #### Services ####
    Route::resource('services', ServiceController::class);

    #### Settings ####
    Route::resource('settings', SettingController::class);

    #### Sliders ####
    Route::resource('sliders', SliderController::class);

    #### Category ####
    Route::resource('categories', CategoryController::class);

    #### Pages ####
    Route::resource('pages', PageController::class);

}); 










