<?php

/*
|--------------------------------------------------------------------------
| front Routes
|--------------------------------------------------------------------------
|
| Here is where you can register front routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "front" middleware group. Now create something great!
|
*/

// Routes Of Front

Route::namespace('Front')->group(function (){

    Route::get('/', 'HomePageController@getHome')->name('front.homepage');
    Route::get('/cat/{id}', 'CourseController@cat')->name('front.cat');
    Route::get('/cat/{id}/course/{c_id}', 'CourseController@show')->name('front.show');
    Route::get('/contact', 'ContactController@index')->name('front.contact');
    Route::post('/message/newsletter', 'MessageController@newsletter')->name('front.message.newsletter');
    Route::post('/message/contact', 'MessageController@contact')->name('front.message.contact');
    Route::post('/message/enroll', 'MessageController@enroll')->name('front.message.enroll');
});
