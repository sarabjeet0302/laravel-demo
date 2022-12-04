<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\CategoryProduct;


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

       return view('list_product',compact('products'));
    }

    public function addProduct($categoryId)
    {
       return view('add_product',compact('categoryId'));

    }

    public function saveProduct(Request $request){

            // dd($request->all());

        $post = new Product;
        $post->name = $request->name;
        $post->price = $request->price;
        $post->created_at = now();
        $post->active = 1;

        $post->save();

        if($post->save()){
              $prodData = new CategoryProduct;
              $prodData->product_id = $post->id;
              $prodData->category_id = $request->categoryId;
              $prodData->created_at = now();
              $prodData->active = 1;

              $prodData->save();
             return redirect('list/products/'.$request->categoryId)->with('message', 'Product added successfully.');

        }else{
            return back()->with('message','Sorry! Please try again.');
        }

    }
}
