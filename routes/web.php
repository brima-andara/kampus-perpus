<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\baca;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\listController;
use App\Http\Controllers\Ulasan;
use Illuminate\Support\Facades\Route;

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

// Route::get('/list', function () {
//     return view('welcome');
// });
Route::get('/baca', function () {
    return view ('baca');
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth','admin'])->name('dashboard');

Route::post('/create', [DashboardController::class,'store'])->name('store.book');
Route::get('/list', [ListController::class,'index'])->name('list.book');
Route::post('/list/meminjam', [listController::class,'meminjamBuku'])->name('meminjam.book');
Route::get('/ulasan', [Ulasan::class,'index'])->name('ulasan.buku');


Route::get('/', [AuthController::class,'indexLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.action');
Route::delete('/logout', [AuthController::class,'logout'])->name('logout');
Route::get('/register', [AuthController::class,'indexRegister'])->name('register.index');
Route::post('/register', [AuthController::class,'register'])->name('register');

