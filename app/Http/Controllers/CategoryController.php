<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
       $categories = DB::select("SELECT * from categories");
        return view('list_category',compact('categories'));
    }

    public function listCat(){
       return (DB::select("SELECT id,name from categories"));
    }

}
