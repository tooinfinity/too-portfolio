<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\user\ProfileController;


Route::get('/user', [ProfileController::class, 'me']);
Route::get('/user/profile/', [ProfileController::class, 'getProfile']);
Route::post('/user/profile/update/', [ProfileController::class, 'updateProfile']);
Route::post('/user/logout/', [ProfileController::class, 'logout']);