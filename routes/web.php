<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\BankSoalController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SesiUjianController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:user']],function () {
    Route::get('/uu_asn', [FrontController::class, 'uu_asn'])->name('uu_asn');
    Route::get('/show_uu', [FrontController::class, 'show_uu'])->name('show_uu');
    Route::get('/review', [FrontController::class, 'review'])->name('review');
    
    //test route
    Route::get('/menu', [FrontController::class, 'menu'])->name('menu');
    Route::post('/sesi_ujian/post', [SesiUjianController::class, 'store'])->name('sesi_ujian.store');
    Route::get('/test', [FrontController::class, 'test'])->name('test');
    Route::get('/topik', [FrontController::class, 'tentang'])->name('topik');
    Route::put('/hasil', [FrontController::class, 'hasil_ujian'])->name('hasil');
});

Route::group(['middleware' => ['auth', 'role:administrator']], function () {
    Route::get('/peraturan', [PeraturanController::class, 'index'])->name('peraturan.index');
    Route::get('/peraturan/create', [PeraturanController::class, 'create'])->name('peraturan.create');
    Route::get('/peraturan/{id}', [PeraturanController::class, 'show'])->name('peraturan.show');
    Route::get('/peraturan/edit/{id}', [PeraturanController::class, 'edit'])->name('peraturan.edit');
    Route::post('/peraturan/post', [PeraturanController::class, 'store'])->name('peraturan.store');
    Route::put('/peraturan/update/{id}', [PeraturanController::class, 'update'])->name('peraturan.update');
    Route::get('/peraturan/delete/{id}', [PeraturanController::class, 'destroy'])->name('peraturan.delete');

    Route::get('/bank_soal', [BankSoalController::class, 'index'])->name('bank_soal.index');
    Route::get('/bank_soal/create', [BankSoalController::class, 'create'])->name('bank_soal.create');
    Route::get('/bank_soal/{id}', [BankSoalController::class, 'show'])->name('bank_soal.show');
    Route::get('/bank_soal/edit/{id}', [BankSoalController::class, 'edit'])->name('bank_soal.edit');
    Route::post('/bank_soal/post', [BankSoalController::class, 'store'])->name('bank_soal.store');
    Route::put('/bank_soal/update/{id}', [BankSoalController::class, 'update'])->name('bank_soal.update');
    Route::get('/bank_soal/delete/{id}', [BankSoalController::class, 'destroy'])->name('bank_soal.delete');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/post', [UserController::class, 'store'])->name('user.store');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

    Route::get('/sesi_ujian', [SesiUjianController::class, 'index'])->name('sesi_ujian.index');
    Route::get('/sesi_ujian/create', [SesiUjianController::class, 'create'])->name('sesi_ujian.create');
    Route::get('/sesi_ujian/{id}', [SesiUjianController::class, 'show'])->name('sesi_ujian.show');
    Route::get('/sesi_ujian/edit/{id}', [SesiUjianController::class, 'edit'])->name('sesi_ujian.edit');
    // Route::post('/sesi_ujian/post', [SesiUjianController::class, 'store'])->name('sesi_ujian.store');
    Route::put('/sesi_ujian/update/{id}', [SesiUjianController::class, 'update'])->name('sesi_ujian.update');
    Route::get('/sesi_ujian/delete/{id}', [SesiUjianController::class, 'destroy'])->name('sesi_ujian.delete');
});

require __DIR__.'/auth.php';
