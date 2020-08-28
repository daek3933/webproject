<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    Public function register_customer(){
        return view("register");
    }

    Public function login_customer(){
        return view("login");
    }
}
