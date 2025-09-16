<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::apiResource('users', UserController::class);
Route::post('login', [UserController::class, 'login']);
