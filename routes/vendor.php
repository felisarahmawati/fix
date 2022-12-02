<?php

use App\Http\Controllers\Vendor\AutentikasiController;
use Illuminate\Support\Facades\Route;

Route::controller(AutentikasiController::class)->group(function() {
    Route::prefix("login")->group(function() {
        Route::get("/vendor", "login");
    });
});
