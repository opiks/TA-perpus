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
