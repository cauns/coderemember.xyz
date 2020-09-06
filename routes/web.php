<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
//FRONTEND
Route::namespace('frontend')->name('frontend.')->group(function (){
    Route::get('/','HomeController@index')->name('home');
    Route::get('/'.trans('global.link_categories').'/{slug}','CategoryController@index')->name('category');
    Route::get('/'.trans('global.link_post').'/{slug}','PostController@index')->name('post');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
