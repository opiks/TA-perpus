<?php

use Illuminate\Support\Facades\Route;


Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('kategori-buku', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('kategori.index');
Route::get('kategori-buku/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('kategori.add');
Route::post('kategori-buku/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('kategori.store');
Route::get('kategori-buku/edit/{Category}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('kategori.edit');
Route::put('kategori-buku/update/{Category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('kategori.update');
Route::get('kategori-buku/destroy/{Category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('kategori.destroy');

Route::get('lokasi-buku', [App\Http\Controllers\Admin\LocationController::class, 'index'])->name('lokasi.index');
Route::get('lokasi-buku/add', [App\Http\Controllers\Admin\LocationController::class, 'add'])->name('lokasi.add');
Route::post('lokasi-buku/store', [App\Http\Controllers\Admin\LocationController::class, 'store'])->name('lokasi.store');
Route::get('lokasi-buku/edit/{Location}', [App\Http\Controllers\Admin\LocationController::class, 'edit'])->name('lokasi.edit');
Route::put('lokasi-buku/update/{Location}', [App\Http\Controllers\Admin\LocationController::class, 'update'])->name('lokasi.update');
Route::get('lokasi-buku/destroy/{Location}', [App\Http\Controllers\Admin\LocationController::class, 'destroy'])->name('lokasi.destroy');

Route::get('member', [App\Http\Controllers\Admin\MemberController::class, 'index'])->name('member.index');
Route::get('member/add', [App\Http\Controllers\Admin\MemberController::class, 'add'])->name('member.add');
Route::post('member/store', [App\Http\Controllers\Admin\MemberController::class, 'store'])->name('member.store');
Route::get('member/edit/{Member}', [App\Http\Controllers\Admin\MemberController::class, 'edit'])->name('member.edit');
Route::put('member/update/{Member}', [App\Http\Controllers\Admin\MemberController::class, 'update'])->name('member.update');
Route::get('member/destroy/{Member}', [App\Http\Controllers\Admin\MemberController::class, 'destroy'])->name('member.destroy');

Route::get('Tipe-buku', [App\Http\Controllers\Admin\TypeController::class, 'index'])->name('tipe.index');
Route::get('Tipe-buku/add', [App\Http\Controllers\Admin\TypeController::class, 'add'])->name('tipe.add');
Route::post('Tipe-buku/store', [App\Http\Controllers\Admin\TypeController::class, 'store'])->name('tipe.store');
Route::get('Tipe-buku/edit/{Type}', [App\Http\Controllers\Admin\TypeController::class, 'edit'])->name('tipe.edit');
Route::put('Tipe-buku/update/{Type}', [App\Http\Controllers\Admin\TypeController::class, 'update'])->name('tipe.update');
Route::get('Tipe-buku/destroy/{Type}', [App\Http\Controllers\Admin\TypeController::class, 'destroy'])->name('tipe.destroy');

Route::get('buku', [App\Http\Controllers\Admin\BookController::class, 'index'])->name('buku.index');
Route::get('buku/add', [App\Http\Controllers\Admin\BookController::class, 'add'])->name('buku.add');
Route::post('buku/store', [App\Http\Controllers\Admin\BookController::class, 'store'])->name('buku.store');
Route::get('buku/edit/{Book}', [App\Http\Controllers\Admin\BookController::class, 'edit'])->name('buku.edit');
Route::put('buku/update/{Book}', [App\Http\Controllers\Admin\BookController::class, 'update'])->name('buku.update');
Route::get('buku/destroy/{Book}', [App\Http\Controllers\Admin\BookController::class, 'destroy'])->name('buku.destroy');
