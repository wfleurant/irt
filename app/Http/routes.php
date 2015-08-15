<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('site.index');
});

Route::get('about', function () {
    return view('site.about');
});

Route::get('contact-us', function () {
    return view('site.contact');
});

Route::group(['prefix' => 'q'], function() {

    Route::get('view/{id}', 'QuoteController@show');

    Route::get('new', 'QuoteController@showNew');

    Route::get('popular', 'QuoteController@showPopular');

    Route::get('create', 'QuoteController@create');
    
    Route::post('auth/post', 'QuoteController@store');
});
