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

Route::get('/', "App\Http\Controllers\WelcomeController@index")->name('welcome');

Route::get('/category', "App\\Http\\Controllers\\WelcomeController@filter")->name("welcome.filter");

Route::get('/category/search', "App\\Http\\Controllers\\WelcomeController@search")->name("welcome.search");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//reuse exist route
Route::get('auth/logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('auth.logout');
