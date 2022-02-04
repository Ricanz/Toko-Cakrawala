<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SubKategoriController;
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
    return view('index');
});
// Route::get('/main-kategori', function () {
//     return view('admin.kategori.main.index');
// });
// Route::get('/sub-kategori', function () {
//     return view('admin.kategori.sub.index');
// });

Route::get('/dashboard', function () {
    return view('admin.index');
});
Route::resource('kategori', KategoriController::class);
Route::resource('subKategori', SubKategoriController::class);
Route::resource('produk', ProdukController::class);
Route::get('produk-grid', [ProdukController::class, 'grid'])->name('produk-grid');

require __DIR__.'/auth.php';
