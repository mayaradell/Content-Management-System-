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

route::resource("categories", "App\Http\Controllers\Panel\Admin\CategoryController",[
    'as'=>'admin'
]);

Route::get('/search/Categories', "App\Http\Controllers\Panel\Admin\CategoryController@search")->name("admin.categories.search");
