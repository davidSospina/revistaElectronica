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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::resource('dashboard/article','ArticleController');

Route::resource('dashboard/category','CategoryController');

Route::view('dashboard/bienvenida', 'dashboard.bienvenida')->name('bienvenida');
Route::get('dashboard/bienvenida', 'HomeController@index')->name('dashboard');


