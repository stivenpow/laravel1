<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcime', function () {
    return view('welcome');
});
Route::post('/contact',[ContactController::class,'store']);

//Route::get('/product',[ProductController::class,'index']);
Route::resource('/product', ProductController::class);
//Route::get('/product/{id}/edit',ProductController::class)=>name='edit';
