<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\education\EducationController;

Route::get('/education', [EducationController::class, 'index']);
Route::get('/education/{education}', [EducationController::class, 'show']);
Route::post('/education', [EducationController::class, 'store']);
Route::patch('/education/{education}', [EducationController::class, 'update']);
Route::delete('/education/{education}', [EducationController::class, 'destroy']);
