<?php

use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserPostController::class, 'index']);