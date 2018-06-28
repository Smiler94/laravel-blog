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
    return view('welcome');
});

Route::get('/listing', 'ArticleController@listing');

Route::resource('article', 'ArticleController');
Route::resource('category', 'CategoryController');

Route::group(['prefix'=>'admin'], function() {
    Route::resource('article', 'Admin\ArticleController');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('tag', 'Admin\TagController');
});