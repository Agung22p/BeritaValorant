<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CaraouselController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonfigurasiController;

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

Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
    Route::post('/admin/user/simpan', [UserController::class, 'simpan'])->name('admin.user.simpan');
    Route::get('/admin/user/{id_user}', [UserController::class, 'delete'])->name('admin.user.delete');
    Route::post('/admin/user/update/{id_user}', [UserController::class, 'update'])->name('admin.user.update');

    Route::get('/admin/konfigurasi', [KonfigurasiController::class, 'index'])->name('admin.config');
    Route::Post('/admin/konfigurasi/simpan', [KonfigurasiController::class, 'update'])->name('admin.config.simpan');



});

// User routes
Route::middleware('kontributor')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('custom.auth')->group(function () {
    Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::post('/admin/kategori/simpan', [KategoriController::class, 'simpan'])->name('kategori.simpan');
    Route::get('/admin/kategori/{id_kategori}', [KategoriController::class, 'delete'])->name('kategori.delete');
    Route::post('/admin/kategori/update/{id_kategori}', [KategoriController::class, 'update'])->name('kategori.update');

    Route::get('/admin/konten', [KontenController::class, 'index'])->name('konten');
    Route::post('/admin/konten/store', [KontenController::class, 'store'])->name('konten.simpan');
    Route::get('/admin/konten/{id_konten}', [KontenController::class, 'delete'])->name('konten.delete');
    Route::post('/admin/konten/update/{id_konten}', [KontenController::class, 'update'])->name('konten.update');

    Route::get('/admin/caraousel', [CaraouselController::class, 'index'])->name('caraousel');
    Route::post('/admin/caraousel/simpan', [CaraouselController::class, 'simpan'])->name('caraousel.simpan');
    Route::get('/admin/caraousel/{id_caraousel}', [CaraouselController::class, 'delete'])->name('caraousel.delete');

    Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
    Route::post('/admin/galeri/simpan', [GaleriController::class, 'simpan'])->name('admin.galeri.simpan');
    Route::get('/admin/galeri/{id_galeri}', [GaleriController::class, 'delete'])->name('admin.galeri.delete');

    Route::get('/admin/saran', [SaranController::class, 'index'])->name('admin.saran');
    Route::get('/admin/saran/delete/{id_saran}', [SaranController::class, 'delete'])->name('saran.delete');
    Route::get('/admin/saran/delete_all', [SaranController::class, 'delete_all'])->name('saran.delete.all');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [HomeController::class, 'detail'])->name('home.detail');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('home.galeri');
Route::post('/saran/simpan', [HomeController::class, 'simpan_saran'])->name('home.saran.simpan');

Route::middleware('has.login')->get('/auth', [AuthController::class, 'index'])->name('auth');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');





