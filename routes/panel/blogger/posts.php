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


route::resource("posts", "App\Http\Controllers\Panel\Blogger\PostController", [
    'as' => 'blogger'
]);

Route::get('posts/search', "App\Http\Controllers\Panel\Blogger\PostController@search")->name("blogger.posts.search");

