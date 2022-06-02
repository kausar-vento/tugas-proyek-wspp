<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaCrudController;
use App\Http\Controllers\KelasCrudController;
use App\Http\Controllers\PetugasCrudController;
use App\Http\Controllers\SppCrudController;
use App\Http\Controllers\SiswaLoginController;
use App\Http\Controllers\PetugasLoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PembayaranAdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\EditProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/home', function () {
    return view('admin.home_admin');
})->middleware('auth');

// Admin========================================================
// Resource Siswa
Route::resource('/admin-siswa', SiswaCrudController::class)->middleware('auth');
// Resource Kelas
Route::resource('/admin-kelas', KelasCrudController::class)->middleware('auth');
// Resource Petugas
Route::resource('/admin-petugas', PetugasCrudController::class)->middleware('auth');
// Resource Spp
Route::resource('/admin-spp', SppCrudController::class)->middleware('auth');
Route::get('/admin-laporan', [PembayaranAdminController::class, 'index'])->middleware('auth');
Route::get('/login-admin', [AdminLoginController::class, 'index'])->middleware('guest');
Route::post('/login-admin', [AdminLoginController::class, 'store'])->name('admin.loginAdmin');    
Route::get('/logout-admin', [AdminLoginController::class, 'logoutAdmin'])->name('logout-admin');
// Admin========================================================

// Murid========================================================

Route::get('/home-murid', [SiswaLoginController::class, 'homeSiswa'])
    ->name('siswa.home_murid')->middleware('auth:websiswa');
Route::get('/login-murid', [SiswaLoginController::class, 'loginSiswa'])
    ->name('siswa.loginMurid');
Route::post('/login-murid', [SiswaLoginController::class, 'prosesLoginSiswa'])
    ->name('siswa.prosesLoginSiswa');
Route::get('/logout-murid', [SiswaLoginController::class, 'logoutSiswa'])
    ->name('siswa.logoutSiswa');

Route::resource('/murid-pembayaran', PembayaranController::class)->middleware('auth:websiswa');
Route::resource('/murid-profile', EditProfileController::class)->middleware('auth:websiswa');
// Murid========================================================

// PETUGAS========================================================

Route::get('/home-petugas', [PetugasLoginController::class, 'homePetugas'])
    ->name('petugas.home_petugas')->middleware('auth:webpetugas');
Route::get('/login-petugas', [PetugasLoginController::class, 'loginPetugas'])
    ->name('petugas.loginPetugas');
Route::post('/login-petugas', [PetugasLoginController::class, 'prosesLoginPetugas'])
    ->name('petugas.prosesLoginPetugas');
Route::get('/logout-petugas', [PetugasLoginController::class, 'logoutPetugas'])
    ->name('petugas.logoutPetugas');

Route::get('/petugas-laporan', [PembayaranAdminController::class, 'indexPetugas'])->middleware('auth:webpetugas');
// PETUGAS========================================================