<?php

use App\Http\Controllers\dashboard\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\PostController;


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


Route::resource('dashboard/post',PostController::class);

Route::resource('dashboard/category',CategoryController::class);


Route::resource('dashboard/category3',CategoryController::class);
