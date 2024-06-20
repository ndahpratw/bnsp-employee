<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'landing']);
Route::get('/login', function () { return view('login'); })->name('login');
Route::post('/login', [LoginController::class, 'autentikasi']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/pegawai', PegawaiController::class)->names('pegawai');
});
