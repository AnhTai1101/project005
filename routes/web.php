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
    Route::group(['prefix' => 'admin','middleware' => 'CheckLogin'], function () {
        // home backend
        Route::get('home', 'homeController@index')->name('homeBackend');
        // end home-backend
        // user
        Route::group(['prefix' => 'user'], function () {
            Route::get('home', 'userController@home')->name('home-user');
            Route::get('/', 'userController@home');
            Route::post('add', 'userController@add')->name('add-user');
            Route::get('info/{id}', 'userController@edit')->name('edit-user');
            Route::post('post-info','userController@goEdit')->name('post-edit-user');
            Route::get('delete/{id}', 'userController@delete')->name('delete-user');
        });
        // product
        Route::group(['prefix' => 'product'], function () {
            Route::get('home', 'productController@home')->name('home-product');
            Route::get('/', 'productController@home')->name('home-product');
            Route::get('add', 'productController@add')->name('add-product');
            Route::post('post-add', 'productController@getAdd')->name('post-add-product');
        });
        // color
        Route::group(['prefix' => 'color'], function () {
            //home
            Route::get('home', 'colorController@home');
            Route::get('/', 'colorController@home')->name('home-color');
            // add
            Route::get('add-color', 'colorController@add')->name('add-color');
            Route::post('post-add-color', 'colorController@goAdd')->name('post-add-color');
        });
        // size
        Route::group(['prefix' => 'size'], function () {
            Route::get('/', 'sizeController@home')->name('home-size');
            Route::get('home', 'sizeController@home');
        });
    });
});
// End Adnin