<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;

//Auth
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//Level = User
Route::group(['middleware' => 'auth', 'ceklevel:user'], function() {

    //Dashboard
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::post('/tambah-kategori', [KategoriController::class, 'store'])->name('tambah-kategori');
    Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('edit-kategori');
    Route::post('/update-kategori/{id}', [KategoriController::class, 'update'])->name('update-kategori');
    Route::get('/delete-kategori', [KategoriController::class, 'destroy'])->name('delete-kategori');

    //Barang
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/barang/tambah', [BarangController::class, 'create'])->name('tambah-barang');
    Route::post('/barang/store', [BarangController::class, 'store'])->name('store-barang');
    Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('edit-barang');
    Route::post('/barang/update/{id}', [BarangController::class, 'update'])->name('update-barang');
    Route::get('/barang/delete/{id}', [BarangController::class, 'destroy'])->name('delete-barang');

});


//Level = Admin
Route::group(['middleware' => 'auth', 'ceklevel:admin'], function() {

    //Dashboard
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Users
    Route::get('/users', [UsersController::class, 'index'])->name('user');
    Route::get('/users/tambah', [UsersController::class, 'create'])->name('tambah-user');
    Route::post('/users/store', [UsersController::class, 'store'])->name('store-user');
    Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('edit-user');
    Route::post('/users/update/{id}', [UsersController::class, 'update'])->name('update-user');
    Route::get('/users/delete/{id}', [UsersController::class, 'destroy'])->name('delete-user');

    //Kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::post('/kategori/tambah', [KategoriController::class, 'store'])->name('tambah-kategori');
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('edit-kategori');
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update'])->name('update-kategori');
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('delete-kategori');

    //Barang
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/barang/tambah', [BarangController::class, 'create'])->name('tambah-barang');
    Route::post('/barang/store', [BarangController::class, 'store'])->name('store-barang');
    Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('edit-barang');
    Route::post('/barang/update/{id}', [BarangController::class, 'update'])->name('update-barang');
    Route::get('/barang/delete/{id}', [BarangController::class, 'destroy'])->name('delete-barang');

});
