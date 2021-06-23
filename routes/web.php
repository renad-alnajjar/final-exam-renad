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
});
 Route::get('/product', function () {
    return view('allProductss');
});
Route::get('/cata', function () {
    return view('allCategories');
});Route::get('/createCa', function () {
    return view('CreateCategories');
});
Route::get('/createOrder', function () {
    return view('createOrder');
});
Route::get('/createProduct', function () {
    return view('createProduct');
});
Auth::routes();
 
Route::post('/stores', [App\Http\Controllers\ProductController::class, 'store']);
Route::put('edits/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::patch('update/{id}', [App\Http\Controllers\ProductController::class, 'update']);
Route::delete('destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('contacts', [App\Http\Controllers\ProductController::class, 'contact']);

Route::get('/index', [App\Http\Controllers\ProductController::class, 'index']);

Route::post('/store', [App\Http\Controllers\CategoriesController::class, 'store']);
  Route::get('/home', [App\Http\Controllers\CategoriesController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('contact', [App\Http\Controllers\CategoriesController::class, 'contact']);
Route::put('edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::patch('update/{id}', [App\Http\Controllers\CategoriesController::class, 'update']);
Route::delete('destroy/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy']);