<?php

use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('user_posts.index');
});


Route::resource('user_posts', UserPostController::class)->only(['index', 'create', 'store', 'destroy']);
