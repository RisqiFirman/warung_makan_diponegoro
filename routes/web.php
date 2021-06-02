<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesanController;

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('home', [MenuController::class, 'index'])->name('index');

Route::get('detail/{id}', [MenuController::class, 'detailData']);

Route::post('detail/pesan/{id}', [MenuController::class, 'pesan']);

Route::get('check-out', [MenuController::class, 'check_out']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});
Route::get('/menu', function () {
    return view('menu');
});
