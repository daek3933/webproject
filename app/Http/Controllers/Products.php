<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    Public function view_products(){
        return view("shop");
    }
    Public function product_detail(){
        return view("product-detail");
    }
}
