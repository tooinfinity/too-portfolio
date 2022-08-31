<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

require __DIR__ . '/api/v1/auth/auth.php';

Route::middleware('auth:sanctum')->group(function () {
  require __DIR__ . '/api/v1/user/user.php';
  require __DIR__ . '/api/v1/education/education.php';
  require __DIR__ . '/api/v1/certification/certification.php';
});
