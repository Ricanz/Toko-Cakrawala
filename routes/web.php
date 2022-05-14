<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SubKategoriController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PesananController;
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

Route::get('/', [BerandaController::class, 'beranda']);
Route::get('/katalog', [BerandaController::class, 'katalog'])->name('katalog');
Route::get('/kategori/{slug}', [BerandaController::class, 'produkKategori'])->name('produkKategori');
Route::get('/produk-detail/{slug}', [BerandaController::class, 'detailProduk'])->name('detailProduk');
Route::get('/artikel-detail/{slug}', [BerandaController::class, 'detailArtikel'])->name('detailArtikel');
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/tentang', function () {
    return view('tentang');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    });
    Route::resource('kategori', KategoriController::class);
    Route::resource('subKategori', SubKategoriController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('user', UserController::class);
    Route::resource('pesanan', PesananController::class)->except('detail');
});
Route::get('admin/cara-pemesanan', [GeneralController::class, 'pemesanan'])->name('pemesanan');
Route::post('admin/cara-pemesanan/update', [GeneralController::class, 'updatePemesanan'])->name('updatePemesanan');
Route::get('detail-pesanan/{id}', [PesananController::class, 'detail']);
Route::get('produk-grid', [ProdukController::class, 'grid'])->name('produk-grid');
Route::post('addToCart', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('Cart', [CartController::class, 'Cart']);
Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('updateToCart', [CartController::class, 'updateToCart']);
Route::delete('deleteCart/{id}', [CartController::class, 'deleteFromCart'])->name('deleteCart');
Route::get('clearCart', [CartController::class, 'clearCart']);
Route::post('print-invoice', [InvoiceController::class, 'invoice']);

require __DIR__ . '/auth.php';
