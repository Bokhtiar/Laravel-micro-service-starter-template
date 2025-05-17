<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Vendor One'],
        ['id' => 2, 'name' => 'Vendor Two']
    ]);
});