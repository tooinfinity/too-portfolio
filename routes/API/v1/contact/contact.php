<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\contact\ContactController;

Route::post('/contact', [ContactController::class, 'store']);