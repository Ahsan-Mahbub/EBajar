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
        //District
        Route::resource('/district', 'DistrictController');
        Route::post('/district/store', 'DistrictController@store');
        //Route::post('/district/update', 'DistrictController@update');
        Route::get('/district/show/{id}', 'DistrictController@show');
        //SubDistrict
        Route::resource('/sub_district', 'SubDistrictController');
        Route::post('/sub_district/store', 'SubDistrictController@store');
        Route::post('/sub_district/update', 'SubDistrictController@update');
        Route::get('/sub_district/show/{id}', 'SubDistrictController@show');
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
        //color
        Route::get('showlist' , 'ColorController@datalist');
        Route::resource('/color', 'ColorController');
        Route::post('/color/store' , 'ColorController@store');
        route::post('/color/update' , 'ColorController@update');



        //Slider
        Route::resource('/slider', 'SliderController');
        Route::post('/slider/store', 'SliderController@store');
        Route::get('/slider/show/{id}', 'SliderController@show');
        Route::post('/slider/update','SliderController@update');
        //Product
        Route::resource('/product', 'ProductController');
        Route::get('/product/category/{category_id}', 'ProductController@category');
        Route::get('/list', 'ProductController@list');
        Route::post('/product/store', 'ProductController@store');
        Route::post('/product/update', 'ProductController@update');
        Route::get('/product/show/{id}', 'ProductController@show');


    });
});
