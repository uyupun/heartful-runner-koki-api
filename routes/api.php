<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnvelopesController;
use Illuminate\Http\Request;

Route::prefix('auth')->group(function () {
    Route::post('/signup', [AuthController::class, 'signup']);
    Route::post('/signin', [AuthController::class, 'signin']);
});

Route::middleware('auth:sanctum')->prefix('/envelopes')->group(function () {
    Route::post('/', [EnvelopesController::class, 'create']);
    Route::post('/{id}/verify', [EnvelopesController::class, 'verify']);
    Route::put('/{id}', [EnvelopesController::class, 'receive']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return response()->json(['message' => 'hello, world!']);
});
