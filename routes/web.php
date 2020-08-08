<?php

use Illuminate\Support\Facades\Route; 

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/admin', 'HomeController@index');
Route::prefix('admin')->group(function(){
    Route::middleware('auth')->group(function () {
    	//Division
        Route::resource('/division', 'DivisionController');
        Route::post('/division/store', 'DivisionController@store');
        Route::post('/division/update', 'DivisionController@update');
        Route::get('/division/show/{id}', 'DivisionController@show');
    	//Category
    	Route::resource('/category', 'CategoryController');
        Route::post('/category/store', 'CategoryController@store');
        Route::post('/category/update', 'CategoryController@update');
        Route::get('/category/show/{id}', 'CategoryController@show');
        //SubCategory
    	Route::resource('/sub_category', 'SubCategoryController');
        Route::post('/sub_category/store', 'SubCategoryController@store');
        Route::post('/sub_category/update', 'SubCategoryController@update');
        Route::get('/sub_category/show/{id}', 'SubCategoryController@show');
        //Brand
        Route::resource('/brand', 'BrandController');
        Route::post('/brand/store', 'BrandController@store');
        Route::post('/brand/update', 'BrandController@update');
        Route::get('/brand/show/{id}', 'BrandController@show');
        //Slider
        Route::resource('/slider', 'SliderController');
        Route::post('/slider/store', 'SliderController@store');
        Route::post('/slider/update', 'SliderController@update');
        Route::get('/slider/show/{id}', 'SliderController@show');
        //Product
        Route::resource('/product', 'ProductController');
        Route::get('/product/category/{category_id}', 'ProductController@category');
        Route::get('/list', 'ProductController@list');
        Route::post('/product/store', 'ProductController@store');
        Route::post('/product/update', 'ProductController@update');
        Route::get('/product/show/{id}', 'ProductController@show');


    });
});