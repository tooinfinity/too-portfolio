<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\job\JobController;

Route::get('/job', [JobController::class, 'index']);
Route::get('/job/{job}', [JobController::class, 'show']);
Route::post('/job', [JobController::class, 'store']);
Route::patch('/job/{job}', [JobController::class, 'update']);
Route::delete('/job/{job}', [JobController::class, 'destroy']);
