<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SubKategoriController;
use App\Http\Controllers\TestimonialController;
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
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('/print-invoice', function () {
    return view('print-invoice');
});
Route::get('/detail_produk', function () {
    return view('detail_produk');
});
Route::get('/katalog', function () {
    return view('katalog');
});
Route::get('/tentang', function () {
    return view('tentang');
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
Route::resource('testimonial', TestimonialController::class);
Route::resource('produk', ProdukController::class);
Route::get('produk-grid', [ProdukController::class, 'grid'])->name('produk-grid');
Route::post('addToCart', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('Cart', [CartController::class, 'Cart']);
Route::post('updateToCart', [CartController::class, 'updateToCart']);
Route::delete('deleteCart/{id}', [CartController::class, 'deleteFromCart'])->name('deleteCart');
Route::get('clearCart', [CartController::class, 'clearCart']);

require __DIR__.'/auth.php';
