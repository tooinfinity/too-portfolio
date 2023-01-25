<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\auth\LoginController;
use App\Http\Controllers\API\V1\auth\RegisterController;


Route::post('/auth/register', [RegisterController::class, 'register']);
Route::post('/auth/login', [LoginController::class, 'login']);
