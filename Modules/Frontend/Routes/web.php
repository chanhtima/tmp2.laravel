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

Route::prefix('')->group(function() {
    Route::get('/', 'FrontendController@index');
    Route::get('/about', 'FrontendController@about');
    Route::get('/blog', 'FrontendController@blog');
    Route::get('/blog-detail', 'FrontendController@blogDetail');
    Route::get('/contact', 'FrontendController@contact');
    Route::get('/product-details', 'FrontendController@productDetails');
    Route::get('/products', 'FrontendController@products');
    Route::get('/news-details', 'FrontendController@newsDetails');
    Route::get('/news-event', 'FrontendController@newsEvent');
    Route::get('/policy', 'FrontendController@policy');
    Route::get('/product-groups', 'FrontendController@productGroups');
});
