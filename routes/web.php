<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\baca;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\listController;
use App\Http\Controllers\Ulasan;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/', function () {
    return view ('edit');
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth','admin'])->name('dashboard');
Route::get('/detail', [DashboardController::class,'indexDetail'])->name('detail.meminjam');
Route::post('/create', [DashboardController::class,'store'])->name('store.book');
Route::delete('/book/delete/{id}', [DashboardController::class, 'destroy']) ->name('dashboard.destroy');
Route::delete('/book/delete/meminjam/{id}', [DashboardController::class, 'destroyMeminjam']) ->name('dashboard.destroy.meminjam');
Route::post('/book/show/{id}', [DashboardController::class, 'show']) ->name('dashboard.show');
Route::get('/book/detail/{seri}/{nim}', [DashboardController::class,'getBook'])->name('get.book');
Route::get('/book/{id}/edit', [DashboardController::class, 'editBuku']) ->name('book.edit');
Route::put('/buku/{id}/', [DashboardController::class, 'updateBuku']) ->name('update.buku');


Route::get('/list', [ListController::class,'index'])->name('list.book');
Route::post('/list/meminjam', [listController::class,'meminjamBuku'])->name('meminjam.book');

Route::get('/ulasan/{id}', [Ulasan::class,'index'])->name('ulasan.buku');
Route::post('/ulasan/tambah/{id}', [Ulasan::class,'tambah'])->name('store.ulasan');


Route::get('/login', [AuthController::class,'indexLogin'])->name('login');
Route::post('/login/action', [AuthController::class,'login'])->name('login.action');
Route::delete('/logout', [AuthController::class,'logout'])->name('logout');
Route::get('/register', [AuthController::class,'indexRegister'])->name('register.index');
Route::post('/register', [AuthController::class,'register'])->name('register');


