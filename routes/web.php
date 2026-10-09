<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\controllers\EnquiryController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('aboutme');
})->name('aboutme');

Route::get("/showproject",[ProjectController::class,"index"])->name('showproject');

Route::get("/admin/addproject",[ProjectController::class,"create"])->name('addproject');
Route::post("/saveproject",[ProjectController::class,"store"]);




Route::get('/admin/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/saveuser', [UserController::class, 'saveuser']);


Route::get('/admin/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/loginuser', [UserController::class, 'loginuser']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get("/admin/showenquiries",[EnquiryController::class,"create"])->name('showenquiries');

Route::get("/contactme",[EnquiryController::class,"index"])->name('contactme');
Route::post("/save",[EnquiryController::class,"store"]);