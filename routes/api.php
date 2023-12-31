<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('items', [\App\Http\Controllers\Api\ItemController::class, 'index']);
Route::get('item/{id}', [\App\Http\Controllers\Api\ItemController::class, 'show']);
Route::post('item', [\App\Http\Controllers\Api\ItemController::class, 'store']);
Route::put('item/{id}', [\App\Http\Controllers\Api\ItemController::class, 'update']);
Route::delete('item/{id}', [\App\Http\Controllers\Api\ItemController::class, 'destroy']);
Route::put('item/{id}/restore', [\App\Http\Controllers\Api\ItemController::class, 'restore']);
