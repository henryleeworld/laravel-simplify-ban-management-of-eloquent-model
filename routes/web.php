<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user/{userId}/ban', [UserController::class, 'ban']);
