<?php

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/stats', function () {
    return response()->json([
        'uptime' => '48 hours',
        'users' => 120
    ]);
});


Route::get('/list', function () {
    $items = Admin::all();
    return response()->json([
        'message' => 'Admin list',
        'data' => $items
    ]);
});


