<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluar;
use App\Http\Controllers\SessionController;
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

Route::get('/', function(){
    return view('index');
});
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(BarangController::class)->prefix('barang')->group(function () {
    Route::get('', 'index')->name('barang');
    Route::get('tambah', 'tambah')->name('barang.tambah');
    Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('barang.edit');
    Route::post('edit/{id}', 'update')->name('barang.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('barang.hapus');

});


Route::controller(BarangKeluar::class)->prefix('barang.barang_keluar')->group(function () {
    Route::get('', 'index')->name('barang.barang_keluar');
    Route::get('tambah', 'tambah')->name('barang.barang_keluar.tambah');
    Route::post('tambah', 'simpan')->name('barang.barang_keluar.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('barang.barang_keluar.edit');
    Route::post('edit/{id}', 'update')->name('barang.barang_keluar.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('barang.barang_keluar.hapus');
});

Route::get('/sesi', [SessionController::class, 'index'])->name('login');
Route::post('/sesi/login', [SessionController::class, 'login']);

Route::get('/sesi/register', [SessionController::class, 'register'])->name('register');
Route::post('/sesi/create', [SessionController::class, 'create']);