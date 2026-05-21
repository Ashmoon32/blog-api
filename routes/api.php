<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'မင်္ဂလာပါ ကမ္ဘာကြီး!',
        'status' => 'success'
    ]);
});

Route::apiResource('posts', PostController::class);