<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', [\Aleksshar\Posts\Http\Controllers\PostController::class, 'index']);
