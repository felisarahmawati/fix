<?php

use App\Http\Controllers\Akun\LoginController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => ["guest"]], function() {
    Route::get("/login", [LoginController::class, "login"]);
    Route::post("/login", [LoginController::class, "post_login"]);
    Route::get("/register", [LoginController::class, "buat_akun"]);
    Route::post("/register", [LoginController::class, "post_register"]);
    Route::post("/post_register", [LoginController::class, "post_register"]);;
    Route::get("/complete-data-personal", [LoginController::class, "complete_data_personal"]);
    Route::post("/complete-data-personal", [LoginController::class, "post_complete_data_personal"]);
});
