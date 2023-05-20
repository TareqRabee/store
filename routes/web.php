<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[FrontController::class,'index']);
Route::get('products', [ProductController::class,'index']);
Route::get('products/create', [ProductController::class,'create']);
Route::post('products/shop', [ProductController::class,'shop']);
Route::get('products/edit/{id}', [ProductController::class,'edit']);
Route::get('products/delete/{id}', [ProductController::class,'destroy']);
Route::patch('products/update/{id}', [ProductController::class,'update']);

Route::get('categories', [CategoryController::class,'index']);
Route::get('categories/create', [CategoryController::class,'create']);
Route::post('categories/shop', [CategoryController::class,'shop']);
Route::get('categories/edit/{id}', [CategoryController::class,'edit']);
Route::get('categories/delete/{id}', [CategoryController::class,'destroy']);
Route::patch('categories/update/{id}', [CategoryController::class,'update']);