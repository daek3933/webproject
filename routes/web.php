<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/","Index@index" );
Route::get("/shop","Products@view_products" );
Route::get("/product-detail","Products@product_detail" );
Route::get("/blog","Blogs@view_blogs" );
Route::get("/blog-detail","Blogs@blogs_detail" );
Route::get("/register","Register@register_customer" );
Route::get("/login","Register@login_customer" );

//Route::get('/shop', function () {
//    return 'Welcome Shop';
//});