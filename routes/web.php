<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/register', [RegisterController::class, 'registerPage'])->name('regis');
Route::post('/register', [RegisterController::class, 'doRegister'])->name('register');




Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'homePage'])->name('dashboard');
    Route::get('/login', [LoginController::class, 'loginPage'])->name('loginPage');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');
});

Route::middleware('auth.custom')->group(function () {
    Route::get('/{page}', [HomeController::class, 'homePageHashAuth'])->name('dashboard-log');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});




