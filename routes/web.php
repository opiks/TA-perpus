<?php

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

// Student Wallet
Route::get('/', [App\Http\Controllers\BooksController::class, 'index'])->name('books.index');
Route::get('/kategori', [App\Http\Controllers\BooksController::class, 'category'])->name('books.category');
Route::get('/cari-buku', [App\Http\Controllers\BooksController::class, 'search'])->name('books.search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
