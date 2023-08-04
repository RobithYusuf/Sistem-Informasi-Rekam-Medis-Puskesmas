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
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('level:admin,petugas,dokter,apotek');
    Route::get('/admin', [HomeController::class, 'index'])->middleware('level:admin,petugas,dokter,apotek');
    Route::get('/get-visit-data', [HomeController::class, 'getVisitData'])->middleware('level:admin,petugas,dokter,apotek');
    Route::get('/get-gender-data', [HomeController::class, 'getGenderData'])->middleware('level:admin,petugas,dokter,apotek');


    // route::get('/tambahpetugas', [DatapetugasController::class, 'create'])->name('tambahpetugas')->middleware('level:admin')->middleware('level:admin,petugas');
    Route::get('/tambahpetugas', [DatapetugasController::class, 'showForm'])->name('tambahpetugas')->middleware('level:admin,petugas');
    route::get('/datapetugas-masuk', [DatapetugasController::class, 'index'])->name('datapetugas-masuk')->middleware('level:admin,petugas');
    route::post('/simpanpetugas', [DatapetugasController::class, 'store'])->name('simpanpetugas')->middleware('level:admin,petugas');
    route::get('/editpetugas/{id}', [DatapetugasController::class, 'edit'])->name('editpetugas')->middleware('level:admin,petugas');
    route::post('/updatepetugas/{id}', [DatapetugasController::class, 'update'])->name('updatepetugas')->middleware('level:admin,petugas');
    route::get('/deletepetugas/{id}', [DatapetugasController::class, 'destroy'])->name('deletepetugas')->middleware('level:admin,petugas');
    Route::post('update_profile', [DatapetugasController::class, 'updateProfile'])->name('update_profile')->middleware('level:admin,petugas');

    route::get('/tambahdokter', [DatadokterController::class, 'create'])->name('tambahdokter')->middleware('level:admin,dokter');
    route::get('/datadokter-masuk', [DatadokterController::class, 'index'])->name('datadokter-masuk')->middleware('level:admin,dokter');
    route::post('/simpandokter', [DatadokterController::class, 'store'])->name('simpandokter')->middleware('level:admin,dokter');
    route::get('/editdokter/{id}', [DatadokterController::class, 'edit'])->name('editdokter')->middleware('level:admin,dokter');
    route::post('/updatedokter/{id}', [DatadokterController::class, 'update'])->name('updatedokter')->middleware('level:admin,dokter');
    route::get('/deletedokter/{id}', [DatadokterController::class, 'destroy'])->name('deletedokter')->middleware('level:admin,dokter');
    Route::post('update_profile_dokter', [DatadokterController::class, 'update_profile_dokter'])->name('update_profile_dokter')->middleware('level:admin,dokter');

    route::get('/tambahpoli', [DatapoliController::class, 'create'])->name('tambahpoli')->middleware('level:admin,petugas');
    route::get('/datapoli-masuk', [DatapoliController::class, 'index'])->name('datapoli-masuk')->middleware('level:admin,petugas');
    route::post('/simpanpoli', [DatapoliController::class, 'store'])->name('simpanpoli')->middleware('level:admin,petugas');
    route::get('/editpoli/{id}', [DatapoliController::class, 'edit'])->name('editpoli')->middleware('level:admin,petugas');
    route::post('/updatepoli/{id}', [DatapoliController::class, 'update'])->name('updatepoli')->middleware('level:admin,petugas');
    route::get('/deletepoli/{id}', [DatapoliController::class, 'destroy'])->name('deletepoli')->middleware('level:admin,petugas');

    route::get('/tambahpasien', [DatapasienController::class, 'create'])->name('tambahpasien')->middleware('level:admin,petugas');
    route::get('/datapasien-masuk', [DatapasienController::class, 'index'])->name('datapasien-masuk')->middleware('level:admin,petugas');
    route::post('/simpanpasien', [DatapasienController::class, 'store'])->name('simpanpasien')->middleware('level:admin,petugas');
    route::get('/editpasien/{id}', [DatapasienController::class, 'edit'])->name('editpasien')->middleware('level:admin,petugas');
    route::post('/updatepasien/{id}', [DatapasienController::class, 'update'])->name('updatepasien')->middleware('level:admin,petugas');
    route::get('/deletepasien/{id}', [DatapasienController::class, 'destroy'])->name('deletepasien')->middleware('level:admin,petugas');

    route::get('/tambahpendaftaran', [DatapendaftaranController::class, 'create'])->name('tambahpendaftaran')->middleware('level:admin,petugas');
    route::get('/datapendaftaran-masuk', [DatapendaftaranController::class, 'index'])->name('datapendaftaran-masuk')->middleware('level:admin,petugas');
    route::post('/simpanpendaftaran', [DatapendaftaranController::class, 'store'])->name('simpanpendaftaran')->middleware('level:admin,petugas');
    route::get('/editpendaftaran/{id}', [DatapendaftaranController::class, 'edit'])->name('editpendaftaransien')->middleware('level:admin,petugas');
    route::post('/updatependaftaran/{id}', [DatapendaftaranController::class, 'update'])->name('updatependaftaran')->middleware('level:admin,petugas');
    Route::delete('/deletependaftaran/{id}', [DatapendaftaranController::class, 'destroy'])->name('deletependaftaran')->middleware('level:admin,petugas');


    route::get('/tambahpemeriksaan', [pemeriksaanController::class, 'create'])->name('tambahpemeriksaan')->middleware('level:admin,dokter, petugas');
    route::get('/datapemeriksaan-masuk', [pemeriksaanController::class, 'index'])->name('datapemeriksaan-masuk')->middleware('level:admin,dokter, petugas');
    route::post('/simpanpemeriksaan', [pemeriksaanController::class, 'store'])->name('simpanpemeriksaan')->middleware('level:admin,dokter, petugas');
    route::get('/editpemeriksaan/{id}', [pemeriksaanController::class, 'edit'])->name('editpemeriksaan')->middleware('level:admin,dokter, petugas');
    route::post('/updatepemeriksaan/{id}', [pemeriksaanController::class, 'update'])->name('updatepemeriksaan')->middleware('level:admin,dokter, petugas');
    route::get('/deletepemeriksaan/{id}', [pemeriksaanController::class, 'destroy'])->name('deletepemeriksaan')->middleware('level:admin,dokter, petugas');

    route::get('/rekammedis-masuk', [RekamMedisController::class, 'index'])->name('rekammedis-masuk')->middleware('level:admin,dokter, petugas,apotek');
    Route::get('/search_and_print', [RekammedisController::class, 'searchAndPrint'])->name('search_and_print')->middleware('level:admin,dokter, petugas,apotek');
});

// Route::middleware(['auth', 'level:admin,petugas,dokter'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

// Route::group(['middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// route::get('/admin', [HomeController::class, 'index']);

// Route::middleware(['auth'])->group(function () {
//    Route::get('/admin', [LoginController::class, 'index']);
// });
