<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\BrandController;
use App\Http\Controllers\api\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::get('categories',[CategoryController::class,'index']);

Route::get('brands',[BrandController::class,'index']);

Route::get('products',[ProductController::class,'index']);
