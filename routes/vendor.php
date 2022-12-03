<?php

use App\Http\Controllers\Master\DataDiriVendorController;
use App\Http\Controllers\Vendor\AutentikasiController;
use Illuminate\Support\Facades\Route;

Route::controller(AutentikasiController::class)->group(function() {
    Route::prefix("login")->group(function() {
        Route::get("/vendor", "login");
        Route::post("/vendor", "post_login");
    });
    Route::prefix("register")->group(function() {
        Route::get("/vendor", "register");
        Route::post("/vendor", "post_vendor");
        Route::get("/complete-data-personal", "complete_data_personal");
        Route::post("/complete-data-personal", "post_complete_data_personal");
    });
});

Route::controller(DataDiriVendorController::class)->group(function(){
    Route::prefix("vendor")->group(function() {
        Route::prefix("lengkapi-data")->group(function() {
            Route::get('/', 'indexp');
            Route::put("/non_aktifkan", "non_aktifkan");
            Route::put("/aktifkan", "aktifkan");
            Route::post("/login/datadiri", "post");
            Route::post("/tambah-layanan", "tambah_layanan");
        });
    });
});
