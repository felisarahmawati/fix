<?php

use App\Http\Controllers\Vendor\AutentikasiController;
use Illuminate\Support\Facades\Route;

Route::controller(AutentikasiController::class)->group(function() {
    Route::prefix("login")->group(function() {
        Route::get("/vendor", "login");
    });
    Route::prefix("register")->group(function() {
        Route::get("/vendor", "register");
        Route::post("/vendor", "post_vendor");
        Route::get("/complete-data-personal", "complete_data_personal");
        Route::post("/complete-data-personal", "post_complete_data_personal");
    });
});
