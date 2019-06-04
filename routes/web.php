<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


/** Rotas para usuários autenticados */
Route::middleware('auth')->group(function () {

    /** Rotas para painel administrativo */
    Route::prefix('admin')->group(function () {

        Route::get('home', 'HomeController@index')->name('home');

        /** Rotas para Event */
        Route::prefix('event')->name('event.')->group(function () {
            Route::get('/', 'EventController@index')->name('index');
            Route::get('/create', 'EventController@create')->name('create');
            Route::post('/store', 'EventController@store')->name('store');
            Route::get('/edit/{event}', 'EventController@edit')->name('edit');
            Route::put('/update/{event}', 'EventController@update')->name('update');
            Route::delete('/destroy/{event}', 'EventController@destroy')->name('destroy');
            Route::get('/show/{event}', 'EventController@show')->name('show');
        });

        /** Rotas para Subscribe */
        Route::prefix('subscribe')->name('subscribe.')->group(function () {
            Route::get('/', 'SubscribeController@index')->name('index');
            Route::get('/show/{subscribe}', 'SubscribeController@show')->name('show');
        });
    });
});

/** Rotas públicas */
Route::prefix('web')->group(function () {

    /** Rotas para Subscribe */
    Route::prefix('subscribe')->name('subscribe.')->group(function () {
        Route::get('/create', 'SubscribeController@create')->name('create');
        Route::post('/store', 'SubscribeController@store')->name('store');
    });
});
