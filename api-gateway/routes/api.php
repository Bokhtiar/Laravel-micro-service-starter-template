<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatewayController;

Route::prefix('admin')->group(function () {
    Route::any('/{any}', [GatewayController::class, 'forwardAdmin'])->where('any', '.*');
});

Route::prefix('vendors')->group(function () {
    Route::any('/{any}', [GatewayController::class, 'forwardVendor'])->where('any', '.*');
});
