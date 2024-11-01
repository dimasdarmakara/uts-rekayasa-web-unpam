<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/transaksi/{id}', [Controller::class, 'transaksi'])->name('transaksi');

