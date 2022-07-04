<?php

use Illuminate\Support\Facades\Route;


Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('kategori-buku', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('kategori.index');
Route::get('kategori-buku/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('kategori.add');
Route::post('kategori-buku/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('kategori.store');
Route::get('kategori-buku/edit/{Category}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('kategori.edit');
Route::put('kategori-buku/update/{Category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('kategori.update');
Route::get('kategori-buku/destroy/{Category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('kategori.destroy');
