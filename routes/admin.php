<?php

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

// Routes Of Admin

Route::namespace('Admin')->prefix('dashboard')->group(function (){

    //Out of middleware
    Route::get('/login', 'AuthController@login')->name('admin.login');
    Route::post('/do-login', 'AuthController@doLogin')->name('admin.doLogin');

    //In of middleware [ must be login ]
    Route::middleware('adminAuth:admin')->group(function (){

        Route::get('/logout', 'AuthController@logout')->name('admin.logout');
        Route::get('/', 'HomeController@index')->name('admin.home');
        Route::get('/cats', 'CatController@index')->name('admin.cats.index');
        Route::get('/cats/create', 'CatController@create')->name('admin.cats.create');
        Route::post('/cats/store', 'CatController@store')->name('admin.cats.store');
        Route::get('/cats/edit/{id}', 'CatController@edit')->name('admin.cats.edit');
        Route::post('/cats/update', 'CatController@update')->name('admin.cats.update');
        Route::get('/cats/delete/{id}', 'CatController@delete')->name('admin.cats.delete');

    });
});
