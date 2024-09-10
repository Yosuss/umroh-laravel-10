<?php

use App\Http\Controllers\contactController;
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

Route::prefix('/')->group(function () {
    Route::get('/',[mainController::class,'index']);
    Route::get('/login',[loginController::class,'index']);
    Route::get('/tentang-kami',[tentangKamiController::class,'tentangkami']);
    Route::get('/testimoni',[testimoniController::class,'testimoni']);
    Route::get('/contact',[contactController::class,'contact']);
    Route::post('/contact',[contactController::class,'tambah'])->name('tambah');
    Route::get('/layanan',[layananController::class,'layanan']);
    Route::post('/layanan',[layananController::class,'tambah'])->name('tambah');

    
});