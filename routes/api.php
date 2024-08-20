<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

use App\Http\Controllers\api\v2\AuthController;

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);



Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::get('/user', [AuthController::class, 'getUser']);

    Route::post('/upload-profile-pic', [AuthController::class, 'upload']);

    Route::post('/update-profile', [AuthController::class, 'updateProfile']);

    Route::post('/logout', [AuthController::class, 'logout']);

});

use App\Http\Controllers\api\v2\CategoryController;

Route::get('/categories', [CategoryController::class, 'index']);

use App\Http\Controllers\api\v2\SubCategoryController;

Route::get('/sub_categories', [SubCategoryController::class, 'index']);

use App\Http\Controllers\api\v2\BrandController;

Route::get('/brands', [BrandController::class, 'index']);

use App\Http\Controllers\api\v2\ProductController;

Route::get('/products', [ProductController::class, 'index']);

use App\Http\Controllers\api\v2\CompanyController;

Route::get('/companies', [CompanyController::class, 'index']);

use App\Http\Controllers\api\v2\CartController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/carts', [CartController::class, 'index']);
    Route::post('/add-to-cart', [CartController::class, 'addToCart']);
    Route::post('/remove-from-cart', [CartController::class, 'removeFromCart']);
    Route::post('/increase-quantity', [CartController::class, 'increaseQuantity']);
    Route::post('/decrease-quantity', [CartController::class, 'decreaseQuantity']);
    Route::post('/clear-cart', [CartController::class, 'clearCart']);
});