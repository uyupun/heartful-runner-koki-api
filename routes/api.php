<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::prefix('auth')->group(function () {
    Route::post('/signup', [AuthController::class, 'signup']);
});

Route::get('/hello', function () {
    return response()->json(['message' => 'hello, world!']);
});
