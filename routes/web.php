<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

Route::resource('posts', PostController::class)->only(['index', 'create', 'show', 'store', 'edit', 'update', 'destroy']);
Route::resource('comments', CommentController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
