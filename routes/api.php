<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('getAllProducts', [ProductController::class, 'index']);
Route::get('product/{id}', [ProductController::class, 'find']);

Route::post('addEmployee', [ProductController::class, '']);
Route::put('editEmployee/{id}', [ProductController::class, '']);
Route::delete('deleteEmployee/{id}', [ProductController::class, '']);

