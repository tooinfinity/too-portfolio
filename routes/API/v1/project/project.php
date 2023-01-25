<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\project\ProjectController;

Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/{project}', [ProjectController::class, 'show']);
Route::post('/project', [ProjectController::class, 'store']);
Route::patch('/project/{project}', [ProjectController::class, 'update']);
Route::delete('/project/{project}', [ProjectController::class, 'destroy']);
