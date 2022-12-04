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




