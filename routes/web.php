<?php

use App\Http\Controllers\admin\ListContactController;
use App\Http\Controllers\admin\ListPendaftarController;
use App\Http\Controllers\admin\ListTestimoniController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\tentangKamiController;
use App\Http\Controllers\testimoniController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Command\ListTestSuitesCommand;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard',[dashboardController::class,'index'])->middleware('admin')->name('dashboard');

Route::prefix('/')->group(function () {
    Route::get('/',[mainController::class,'index'])->name('main');
    Route::get('/login',[loginController::class,'index']);
    Route::post('/login',[loginController::class,'login'])->name('login');
    Route::post('/logout',[loginController::class,'logout'])->name('logout');

    Route::get('/tentang-kami',[tentangKamiController::class,'tentangkami']);
    Route::get('/galeri',[galeriController::class,'galeri']);
    Route::get('/testimoni',[testimoniController::class,'testimoni']);
    Route::get('/contact',[contactController::class,'contact']);
    Route::post('/contact',[contactController::class,'tambah'])->name('contact-tambah');
    Route::get('/layanan',[layananController::class,'layanan']);
    Route::post('/layanan',[layananController::class,'tambah'])->name('layanan-tambah');
});

Route::prefix('/')->middleware('admin')->group(function(){
    Route::get('list-pendaftar', [ListPendaftarController::class, 'index'])->name('list-pendaftar');
    Route::delete('list-pendaftar/{id}', [ListPendaftarController::class, 'hapus'])->name('list-pendaftar.hapus');
    Route::get('list-pendaftar-edit/{id}', [ListPendaftarController::class, 'edit'])->name('list-pendaftar.edit');
    Route::put('list-pendaftar-update/{id}', [ListPendaftarController::class, 'update'])->name('list-pendaftar.update');

    Route::get('list-testimoni', [ListTestimoniController::class, 'index'])->name('list-testimoni');
    Route::delete('list-testimoni/{id}', [ListTestimoniController::class, 'hapus'])->name('list-testimoni.hapus');
    Route::put('list-testimoni-edit/{id}', [ListTestimoniController::class, 'edit'])->name('list-testimoni.edit');
    Route::put('list-testimoni-update/{id}', [ListTestimoniController::class, 'update'])->name('list-testimoni.update');

    Route::get('list-contact', [ListContactController::class, 'index'])->name('list-contact');
    Route::delete('list-contact/{id}', [ListContactController::class, 'hapus'])->name('list-contact.hapus');
    Route::put('list-contact-edit/{id}', [ListContactController::class, 'edit'])->name('list-contact.edit');
    Route::put('list-contact-update/{id}', [ListContactController::class, 'update'])->name('list-contact.update');
});