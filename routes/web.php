<?php

use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('posts.index');
});


Route::resource('posts', UserPostController::class)->only(['index', 'create', 'store', 'destroy']);

