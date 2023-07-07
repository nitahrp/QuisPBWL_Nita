<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Golongan', [App\Http\Controllers\GolonganController::class, 'index']);
Route::get('/Golongan/create', [App\Http\Controllers\GolonganController::class, 'create']);
Route::post('/Golongan', [App\Http\Controllers\GolonganController::class, 'store']);
Route::get('/Golongan/{id}/edit', [App\Http\Controllers\GolonganController::class, 'edit']);
Route::patch('/Golongan/{id}', [App\Http\Controllers\GolonganController::class, 'update']);
Route::delete('/Golongan/{id}', [App\Http\Controllers\GolonganController::class, 'destroy']);

Route::get('/Users', [App\Http\Controllers\UsersController::class, 'index'])->name('home');
Route::get('/Users/create', [App\Http\Controllers\UsersController::class, 'create'])->name('home');
Route::post('/Users', [App\Http\Controllers\UsersController::class, 'store'])->name('home');
Route::get('/Users/{id}/edit', [App\Http\Controllers\UsersController::class, 'edit'])->name('home');
Route::patch('/Users/{id}/', [App\Http\Controllers\UsersController::class, 'update'])->name('home');
Route::delete('/Users/{id}/', [App\Http\Controllers\UsersController::class, 'destroy'])->name('home');

Route::get('/Pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('home');
Route::get('/Pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create'])->name('home');
Route::post('/Pelanggan', [App\Http\Controllers\PelangganController::class, 'store'])->name('home');
Route::get('/Pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit'])->name('home');
Route::patch('/Pelanggan/{id}/', [App\Http\Controllers\PelangganController::class, 'update'])->name('home');
Route::delete('/Pelanggan/{id}/', [App\Http\Controllers\PelangganController::class, 'destroy'])->name('home');