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
            // home
            Route::get('home', 'productController@home')->name('home-product');
            Route::get('/', 'productController@home')->name('home-product');
            // add
            Route::get('add', 'productController@add')->name('add-product');
            Route::post('post-add', 'productController@getAdd')->name('post-add-product');
            // edit 
            Route::get('edit/{id}', 'productController@edit')->name('edit-product');
            Route::post('post-edit', 'productController@goEdit')->name('post-edit-product');
            // delete
            Route::get('delete/{id}', 'productController@delete')->name('delete-product');
            // detail
                // add detail
                Route::get('add-detail/{id}','productController@addDetail')->name('add-detail');
                Route::post('post-add-detail', 'productController@postDetail')->name('post-detail-product');
                // home
                Route::get('home-detail/{id}', 'productController@detail')->name('home-detail');
                // delete
                Route::get('delete-detail/{id}', 'productController@deleteDetail')->name('delete-detail');
                // edit
                Route::get('edit-detail/{id}', 'productController@editDetail')->name('edit-detail');
            // end detail
        });
        // color
        Route::group(['prefix' => 'color'], function () {
            //home
            Route::get('home', 'colorController@home');
            Route::get('/', 'colorController@home')->name('home-color');
            // add
            Route::get('add-color', 'colorController@add')->name('add-color');
            Route::post('post-add-color', 'colorController@goAdd')->name('post-add-color');
            // edit
            Route::post('edit-color', 'colorController@goEdit')->name('edit-color');
            // delete
            Route::get('delete-color/{id}', 'colorController@delete')->name('delete-color');
        });
        // size
        Route::group(['prefix' => 'size'], function () {
            // home
            Route::get('/', 'sizeController@home')->name('home-size');
            Route::get('home', 'sizeController@home');
            // add
            Route::get('add-size', 'sizeController@add')->name('add-size');
            Route::post('post-add-size', 'sizeController@goAdd')->name('post-add-size');
            // edit
            Route::post('edit-size', 'sizeController@goEdit')->name('edit-size');
            // delete
            Route::get('delete-size/{id}', 'sizeController@delete')->name('delete-size');
        });
        // type
        Route::group(['prefix' => 'type'], function () {
            // home
            Route::get('/', 'typeController@home')->name('home-type');
            Route::get('home', 'typeController@home');
            // add
            Route::get('add-type', 'typeController@add')->name('add-type');
            Route::post('post-add-type', 'typeController@goAdd')->name('post-add-type');
            // edit
            Route::post('edit-type', 'typeController@goEdit')->name('edit-type');
            // delete
            Route::get('delete-type/{id}', 'typeController@delete')->name('delete-type');
        });
        // category
        Route::group(['prefix' => 'category'], function () {
            // home
            Route::get('/', 'categoryController@home')->name('home-category');
            Route::get('home', 'categoryController@home');
            // add
            Route::get('add-category', 'categoryController@add')->name('add-category');
            Route::post('post-add-category', 'categoryController@goAdd')->name('post-add-category');
            // edit
            Route::post('edit-category', 'categoryController@goEdit')->name('edit-category');
            // delete
            Route::get('delete-category/{id}', 'categoryController@delete')->name('delete-category');
        });
        Route::group(['prefix' => 'slide'], function () {
            Route::get('/', 'slideController@home')->name('home-slide');
            // add
            Route::get('add', 'slideController@add')->name('add-slide');
            Route::post('post-add', 'slideController@goAdd')->name('post-add-slide');
            // edit
            Route::get('edit/{id}', 'slideController@edit')->name('edit-slide');
            Route::post('post-edit', 'slideController@goEdit')->name('post-edit-slide');
        });
    });
});
// End Adnin
// frontend
Route::group(['namespace' => 'frontend'], function () {
    Route::get('Trang-chu', 'homeController@home');
    Route::get('/', 'homeController@home')->name('trang-chu');
    // product
    
    // chi tiết sản phẩm
    
    // filter
    // - id-desc
    Route::group(['prefix' => 'San-Pham'], function () {
        Route::get('Moi', 'filterController@id_new')->name('new-id');
        Route::get('Chi-tiet/{id}', 'productController@detail')->name('fn-detail-product');
        Route::get('/', 'productController@home')->name('all-product');
        // gia giam dan
        Route::get('Gia-giam', 'filterController@price_reduction')->name('price-reduction');
        // tăng dần
        Route::get('Gia-tang', 'filterController@price_increase')->name('price-increase');
        // <150k
        Route::get('Duoi-150k', 'filterController@price150')->name('duoi-150');
        // >150k and <300k
        Route::get('Duoi-300k', 'filterController@price300')->name('duoi-300');
        // 300-500
        Route::get('Duoi-500', 'filterController@price500')->name('duoi-500');
        // 500- 2.
        Route::get('Duoi-2t', 'filterController@price2')->name('duoi-2t');
        // 2.
        Route::get('Tren-2t', 'filterController@price2t')->name('tren-2t');
        // mau sac
        Route::get('Mau/{id}', 'filterController@color')->name('fn-color');
        // category
        Route::get('Danh-muc/{id}','filterController@category')->name('fn-category');
        // search
        Route::post('search','filterController@search')->name('fn-search');
    });
    // cart
    Route::group(['prefix' => 'Gio-hang'], function () {
        Route::get('/', 'cartController@home')->name('fn-home-cart');

        // add cart
        Route::post('add', 'cartController@add')->name('fn-add-cart');
    });

});