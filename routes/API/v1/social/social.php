<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\social\SocialController;

Route::get('/social', [SocialController::class, 'index']);
Route::get('/social/{social}', [SocialController::class, 'show']);
Route::post('/social', [SocialController::class, 'store']);
Route::patch('/social/{social}', [SocialController::class, 'update']);
Route::delete('/social/{social}', [SocialController::class, 'destroy']);
