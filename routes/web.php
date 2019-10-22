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

Route::group(['prefix' => 'admin'], function () {

    /*
    |--------------------------------------------------------------------------
    | AUTH
    |--------------------------------------------------------------------------
    */
    Auth::routes();

    /*
    |--------------------------------------------------------------------------
    | BERANDA
    |--------------------------------------------------------------------------
    */
    Route::namespace('Backend')
        ->name('backend.beranda.')
        ->middleware(['auth'])
        ->prefix('beranda')
        ->group(function () {
            Route::get('', 'BerandaController@index')->name('index');
        });

    /*
    |--------------------------------------------------------------------------
    | MASTER
    |--------------------------------------------------------------------------
    */
    Route::namespace('Backend\Master')
        ->name('backend.master.')
        ->middleware(['auth'])
        ->prefix('master')
        ->group(function () {

            // Category
            Route::name('category.')
                ->prefix('category')
                ->middleware(['auth'])
                ->group(function () {
                    Route::get('', 'CategoryController@index')->name('index');
                    Route::get('create', 'CategoryController@create')->name('create');
                    Route::post('', 'CategoryController@store')->name('store');
                    Route::get('{category}/edit', 'CategoryController@edit')->name('edit');
                    Route::put('{category}', 'CategoryController@update')->name('update');
                    Route::get('{category}/destroy', 'CategoryController@destroy')->name('destroy');
                });

            // Ingrendients
            Route::name('ingrendient.')
                ->prefix('ingrendient')
                ->middleware(['auth'])
                ->group(function () {
                    Route::get('', 'IngrendientController@index')->name('index');
                    Route::get('create', 'IngrendientController@create')->name('create');
                    Route::post('', 'IngrendientController@store')->name('store');
                    Route::get('{ingrendient}/edit', 'IngrendientController@edit')->name('edit');
                    Route::put('{ingrendient}', 'IngrendientController@update')->name('update');
                    Route::get('{ingrendient}/destroy', 'IngrendientController@destroy')->name('destroy');
                });
        });
});

