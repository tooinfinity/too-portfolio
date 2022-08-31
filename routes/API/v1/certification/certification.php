<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\certification\CertificationController;

Route::get('/certification', [CertificationController::class, 'index']);
Route::get('/certification/{certification}', [CertificationController::class, 'show']);
Route::post('/certification', [CertificationController::class, 'store']);
Route::patch('/certification/{certification}', [CertificationController::class, 'update']);
Route::delete('/certification/{certification}', [CertificationController::class, 'destroy']);
