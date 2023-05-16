<?php

use App\Http\Controllers\CarproductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SellsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*Route::get('/users',[UsersController::class,'index']);
Route::get('/users/{id}',[UsersController::class,'view']);
Route::post('/users',[UsersController::class,'store']);*/
Route::resource('users',UsersController::class);
Route::resource('products',ProductsController::class);
Route::resource('categorys',CategorysController::class);
Route::resource('sells',SellsController::class);
Route::resource('carproducts',CarproductsController::class);
Route::post('/products/do/like',[ProductsController::class,'doLike']);
Route::post('/products/do/question',[ProductsController::class,'doQuestion']);
Route::post('/products/do/review',[ProductsController::class,'doReview']);
Route::post('/products/do/media',[ProductsController::class,'doMedia']);
Route::post('/login',[AuthController::class,'login']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
