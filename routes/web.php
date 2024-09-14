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

Route::get('/dashboard',[dashboardController::class,'index'])->name('dashboard');
Route::prefix('/')->group(function () {
    Route::get('/',[mainController::class,'index']);
    Route::get('/login',[loginController::class,'index']);
    Route::post('/login',[loginController::class,'login'])->name('login');
    Route::post('/login',[loginController::class,'login_dashboard'])->name('login');

    Route::get('/tentang-kami',[tentangKamiController::class,'tentangkami']);
    Route::get('/galeri',[galeriController::class,'galeri']);
    Route::get('/testimoni',[testimoniController::class,'testimoni']);
    Route::get('/contact',[contactController::class,'contact']);
    Route::post('/contact',[contactController::class,'tambah'])->name('contact-tambah');
    Route::get('/layanan',[layananController::class,'layanan']);
    Route::post('/layanan',[layananController::class,'tambah'])->name('layanan-tambah');
});

Route::prefix('/')->group(function(){

    Route::get('list-pendaftar', [ListPendaftarController::class, 'index'])->name('list-pendaftar');
    Route::get('list-testimoni', [ListTestimoniController::class, 'index'])->name('list-testimoni');
    Route::get('list-contact', [ListContactController::class, 'index'])->name('list-contact');
});
