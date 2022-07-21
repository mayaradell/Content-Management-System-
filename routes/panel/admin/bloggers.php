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

// in the route service provider already has middleware admin

route::resource("bloggers", "App\Http\Controllers\Panel\Admin\BloggerController",[
    'as'=>'admin'
]);

Route::get('panel/posts/search', "App\Http\Controllers\Panel\Admin\BloggerController@search")->name("admin.bloggers.search");
