<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $table = 'category_product';


    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->int('category_id');
            $table->int('product_id');
            $table->int('created_at');
            $table->tinyint('active');
        });
    }
}
