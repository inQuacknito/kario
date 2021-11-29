<?php

use App\Http\Controllers\AuthController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/flag', function () {
    return "flag{tH1s_1z_n0T_CtF}";
});

Route::get('/home', function () {
    return view('home');
})->middleware('guest');

Route::get('/hasil-pemeriksaan', function () {
    return view('hasil-pemeriksaan');
});

Route::get('/verifikasi', [AuthController::class, 'listVerif']);

Route::get('/signup', [RegisterController::class, 'index'])->name('Signup')->middleware('guest');

Route::post('/signup', [RegisterController::class, 'store'])->name('Resgister');

Route::get('/login', [LoginController::class, 'index'])->name('Login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->name('Logout');

Route::get('/Pasien', [PasienController::class, 'cariData'])->name('Pasien');

Route::get('/index', [AuthController::class, 'index'])->name('Index')->middleware('auth');

Route::redirect('/', '/home');