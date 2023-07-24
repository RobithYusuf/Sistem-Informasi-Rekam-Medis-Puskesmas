<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatadokterController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\DatapasienController;
use App\Http\Controllers\DatapetugasController;
use App\Http\Controllers\DatapoliController;
use App\Http\Controllers\DatapendaftaranController;
use App\Http\Controllers\pemeriksaanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

route::get('/datapetugas-masuk', [DatapetugasController::class, 'index'])->name('datapetugas-masuk');
route::get('/tambahpetugas', [DatapetugasController::class, 'create'])->name('tambahpetugas');
route::post('/simpanpetugas', [DatapetugasController::class, 'store'])->name('simpanpetugas');
route::get('/editpetugas/{id}', [DatapetugasController::class, 'edit'])->name('editpetugas');
route::post('/updatepetugas/{id}', [DatapetugasController::class, 'update'])->name('updatepetugas');
route::get('/deletepetugas/{id}', [DatapetugasController::class, 'destroy'])->name('deletepetugas');

route::get('/datadokter-masuk', [DatadokterController::class, 'index'])->name('datadokter-masuk');
route::get('/tambahdokter', [DatadokterController::class, 'create'])->name('tambahdokter');
route::post('/simpandokter', [DatadokterController::class, 'store'])->name('simpandokter');
route::get('/editdokter/{id}', [DatadokterController::class, 'edit'])->name('editdokter');
route::post('/updatedokter/{id}', [DatadokterController::class, 'update'])->name('updatedokter');
route::get('/deletedokter/{id}', [DatadokterController::class, 'destroy'])->name('deletedokter');

route::get('/datapoli-masuk', [DatapoliController::class, 'index'])->name('datapoli-masuk');
route::get('/tambahpoli', [DatapoliController::class, 'create'])->name('tambahpoli');
route::post('/simpanpoli', [DatapoliController::class, 'store'])->name('simpanpoli');
route::get('/editpoli/{id}', [DatapoliController::class, 'edit'])->name('editpoli');
route::post('/updatepoli/{id}', [DatapoliController::class, 'update'])->name('updatepoli');
route::get('/deletepoli/{id}', [DatapoliController::class, 'destroy'])->name('deletepoli');

route::get('/datapasien-masuk', [DatapasienController::class, 'index'])->name('datapasien-masuk');
route::get('/tambahpasien', [DatapasienController::class, 'create'])->name('tambahpasien');
route::post('/simpanpasien', [DatapasienController::class, 'store'])->name('simpanpasien');
route::get('/editpasien/{id}', [DatapasienController::class, 'edit'])->name('editpasien');
route::post('/updatepasien/{id}', [DatapasienController::class, 'update'])->name('updatepasien');
route::get('/deletepasien/{id}', [DatapasienController::class, 'destroy'])->name('deletepasien');

route::get('/datapendaftaran-masuk', [DatapendaftaranController::class, 'index'])->name('datapendaftaran-masuk');
route::get('/tambahpendaftaran', [DatapendaftaranController::class, 'create'])->name('tambahpendaftaran');
route::post('/simpanpendaftaran', [DatapendaftaranController::class, 'store'])->name('simpanpendaftaran');
route::get('/editpendaftaran/{id}', [DatapendaftaranController::class, 'edit'])->name('editpendaftaransien');
route::post('/updatependaftaran/{id}', [DatapendaftaranController::class, 'update'])->name('updatependaftaran');
route::get('/deletependaftaran/{id}', [DatapendaftaranController::class, 'destroy'])->name('deletependaftaran');

route::get('/datapemeriksaan-masuk', [pemeriksaanController::class, 'index'])->name('datapemeriksaan-masuk');
route::get('/tambahpemeriksaan', [pemeriksaanController::class, 'create'])->name('tambahpemeriksaan');
route::post('/simpanpemeriksaan', [pemeriksaanController::class, 'store'])->name('simpanpemeriksaan');
route::get('/editpemeriksaan/{id}', [pemeriksaanController::class, 'edit'])->name('editpemeriksaan');
route::post('/updatepemeriksaan/{id}', [pemeriksaanController::class, 'update'])->name('updatepemeriksaan');
route::get('/deletepemeriksaan/{id}', [pemeriksaanController::class, 'destroy'])->name('deletepemeriksaan');

route::get('/rekammedis-masuk', [RekamMedisController::class, 'index'])->name('rekammedis-masuk');
Route::get('/search_and_print', [RekammedisController::class, 'searchAndPrint'])->name('search_and_print');



// Route::middleware(['auth', 'level:admin,petugas,dokter'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
Route::get('/home', [HomeController::class, 'index'])->name('home');
route::get('/admin', [HomeController::class, 'index']);
// Route::middleware(['auth'])->group(function () {
//    Route::get('/admin', [LoginController::class, 'index']);
// });
