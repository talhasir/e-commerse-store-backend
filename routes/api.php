<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;


Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('survey', SurveyController::class);
});
