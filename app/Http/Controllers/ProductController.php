<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($categoryId){
      $products = DB::table('categories as c1')
    ->leftJoin('category_product as c2','c2.category_id','=','c1.id')
    ->leftJoin('products as c3','c3.id','=','c2.product_id')

    ->select('c1.id','c1.name as category_name','c2.category_id','c2.product_id','c3.name as product_name','c3.price')
    ->where('c1.id','=',$categoryId)
    ->whereNotNull('c3.name')
    ->orderBy('c2.created_at', 'DESC')
    ->get();
       return view('list-product',compact('products'));
    }
}
