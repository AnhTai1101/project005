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

Route::get('hello', 'DemoController@index');
// Admin
Route::group(['namespace' => 'backend'], function () {
    Route::get('login', 'loginController@login')->name('login');
    Route::post('postLogin', 'loginController@postLogin')->name('postLogin');
    Route::get('logout', 'loginController@logout')->name('logout');
    // admin
    Route::group(['prefix' => 'admin'], function () {
        Route::get('home', 'homeController@index')->name('homeBackend');
    });
});
// End Adnin