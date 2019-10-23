<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| KESEHATAN HEWAN
|--------------------------------------------------------------------------
*/
Route::namespace('API\Master')
    ->name('api.master.')
    ->prefix('master')
    ->group(function () {

        // Category
        Route::name('category')
            ->prefix('category')
            ->group(function () {
                Route::get('', 'CategoryController@index')->name('index');
                Route::get('{category}/detail', 'CategoryController@detail')->name('detail');
            });

        // Ingrendient
        Route::name('ingrendient')
            ->prefix('ingrendient')
            ->group(function () {
                Route::get('', 'IngrendientController@index')->name('index');
                Route::get('{ingrendient}/detail', 'IngrendientController@detail')->name('detail');
            });

        // Recipe
        Route::name('recipe')
            ->prefix('recipe')
            ->group(function () {
                Route::get('', 'RecipeController@index')->name('index');
                Route::get('{recipe}/detail', 'RecipeController@detail')->name('detail');
            });
    });
