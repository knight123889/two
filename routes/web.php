<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home');
});

Route::get("/showproject",[ProjectController::class,"index"])->name('showproject');

Route::get("addproject",[ProjectController::class,"create"])->name('addproject');
Route::post("/saveproject",[ProjectController::class,"store"]);
