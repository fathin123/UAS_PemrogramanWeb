<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PdfController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\ProductController::class, 'index']);
//Route::get('/','WelcomeUserController@index')->name('home');

Route::get('/', [WelcomeUserController::class, 'index']);

Route::resource('products', ProductController::class);

Route::get('/search', [App\Http\Controllers\ProductController::class, 'search']);
Route::get('/search', [App\Http\Controllers\CustomerController::class, 'search']);

Route::resource('/transaksi', TransaksiController::class);

// Route::get('/transaksi/pdf.cetak_pdf/{id}', [PdfController::class, 'cetak_pdf'])->name('transaksi.cetak_pdf');
// Route::resource('pdf', PdfController::class);

Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/proseslaporan', [LaporanController::class, 'proses']);

Route::resource('customer', CustomerController::class);
