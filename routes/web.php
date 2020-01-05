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

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/
Route::namespace('Frontend')
        ->name('frontend.')
        ->prefix('')
        ->group(function () {
            Route::get('', 'HomeController@index')->name('home');
        });

/*
|--------------------------------------------------------------------------
| Recipe
|--------------------------------------------------------------------------
*/
Route::namespace('Frontend')
        ->name('frontend.recipe.')
        ->prefix('recipe')
        ->group(function () {
            Route::get('', 'RecipeController@index')->name('index');
            Route::get('show/{slug}', 'RecipeController@show')->name('show');
            Route::get('category/{slug}', 'RecipeController@category')->name('category');
            Route::get('favorite/{recipe}', 'RecipeController@favorite')->name('favorite');
        });

/*
|--------------------------------------------------------------------------
| Favorite
|--------------------------------------------------------------------------
*/
Route::namespace('Frontend')
        ->name('frontend.favorite.')
        ->prefix('favorite')
        ->group(function () {
            Route::get('', 'FavoriteRecipeController@index')->name('recipe');
            Route::get('{favorite}/destroy', 'FavoriteRecipeController@destroy')->name('recipe.destroy');
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

            // Recipe
            Route::name('recipe.')
                ->prefix('recipe')
                ->middleware(['auth'])
                ->group(function () {
                    Route::get('', 'RecipeController@index')->name('index');
                    Route::get('create', 'RecipeController@create')->name('create');
                    Route::post('', 'RecipeController@store')->name('store');
                    Route::get('{recipe}/edit', 'RecipeController@edit')->name('edit');
                    Route::put('{recipe}', 'RecipeController@update')->name('update');
                    Route::get('{recipe}/destroy', 'RecipeController@destroy')->name('destroy');
                });

            // Newsletter
            Route::name('newsletter.')
                ->prefix('newsletter')
                ->middleware(['auth'])
                ->group(function () {
                    Route::get('', 'NewsletterController@index')->name('index');
                    Route::get('create', 'NewsletterController@create')->name('create');
                    Route::post('', 'NewsletterController@store')->name('store');
                    Route::get('{newsletter}/edit', 'NewsletterController@edit')->name('edit');
                    Route::put('{newsletter}', 'NewsletterController@update')->name('update');
                    Route::get('{newsletter}/destroy', 'NewsletterController@destroy')->name('destroy');
                });

            // Post
            Route::name('post.')
                ->prefix('post')
                ->middleware(['auth'])
                ->group(function () {
                    Route::get('', 'PostController@index')->name('index');
                    Route::get('create', 'PostController@create')->name('create');
                    Route::post('', 'PostController@store')->name('store');
                    Route::get('{post}/edit', 'PostController@edit')->name('edit');
                    Route::put('{post}', 'PostController@update')->name('update');
                    Route::get('{post}/destroy', 'PostController@destroy')->name('destroy');
                });

            // Page
            Route::name('page.')
                ->prefix('page')
                ->middleware(['auth'])
                ->group(function () {
                    Route::get('', 'PageController@index')->name('index');
                    Route::get('create', 'PageController@create')->name('create');
                    Route::post('', 'PageController@store')->name('store');
                    Route::get('{page}/edit', 'PageController@edit')->name('edit');
                    Route::put('{page}', 'PageController@update')->name('update');
                    Route::get('{page}/destroy', 'PageController@destroy')->name('destroy');
                });

            // Setting
            Route::name('setting.')
                ->prefix('setting')
                ->middleware(['auth'])
                ->group(function () {
                    Route::get('', 'SettingController@index')->name('index');
                    Route::post('', 'SettingController@store')->name('store');
                });
        });
});

Auth::routes();
