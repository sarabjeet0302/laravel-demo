<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
       $categories = DB::select("SELECT * from categories");
        return view('list-category',compact('categories'));
    }

}
