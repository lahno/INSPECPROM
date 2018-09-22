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

Auth::routes();

Route::get('/', 'IndexController@index')->name('home');

Route::get('/account', 'AccountController@index')->name('account');

// Products
Route::group(['prefix' => 'products'], function () {
    Route::get('/', 'ProductController@products')->name('products');
    Route::get('/{id}', 'ProductController@product')->name('product');
});

// Posts
Route::group(['prefix' => 'posts'], function () {
    Route::get('/', 'PostController@posts')->name('posts');
    Route::get('/{id}', 'PostController@post')->name('post');
});

// Categories
Route::get('category/{id}', 'CategoryController@getCategory')->name('getCategory');

// Pages
Route::group(['prefix' => 'page'], function () {
    Route::get('about', 'PageController@about')->name('about');
    Route::get('contact', 'PageController@contact')->name('contact');
});

// Gallery
Route::get('gallery', 'GalleryController@gallery')->name('gallery');
