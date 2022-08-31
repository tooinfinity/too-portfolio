<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\skill\SkillController;

Route::get('/skill', [SkillController::class, 'index']);
Route::get('/skill/{skill}', [SkillController::class, 'show']);
Route::post('/skill', [SkillController::class, 'store']);
Route::patch('/skill/{skill}', [SkillController::class, 'update']);
Route::delete('/skill/{skill}', [SkillController::class, 'destroy']);
