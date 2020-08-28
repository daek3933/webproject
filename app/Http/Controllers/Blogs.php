<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogs extends Controller
{
    Public function view_blogs(){
        return view("blogs");
    }
    Public function blogs_detail(){
        return view("blog-detail");
    }
}
