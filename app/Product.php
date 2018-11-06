<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function viewProduct(){
    	$products = DB::table('products')->get();
	    return $products;
    }
}
