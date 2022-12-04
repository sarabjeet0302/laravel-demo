<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



//Route::get('list/category', function () {

   //$categories = DB::table('categories')->get();
   //return view('list-category',compact('categories'));

//});

Route::get('list/category','App\Http\Controllers\CategoryController@index');

Route::get('list/products/{categoryId}', 'App\Http\Controllers\ProductController@index');

Route::get('list/add-product/{categoryId}', 'App\Http\Controllers\ProductController@addProduct');

Route::get('add-blog-post-form', 'App\Http\Controllers\ProductController@saveProduct');

Route::post('store-form','App\Http\Controllers\ProductController@saveProduct');



