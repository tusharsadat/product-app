<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
//Route::get('products',[ProductController::class,'index']);
Route::get('product/export', [ProductController::class, 'export']);
Route::get('product/upload', [ProductController::class, 'showUploadForm']);
Route::post('product/upload', [ProductController::class,'upload']);