<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('login');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('/market', function () {
    return view('market');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/daftarpesanan', function () {
    return view('daftarpesanan');
});
Route::get('/riwayatpemesanan', function () {
    return view('riwayatpemesanan');
});
Route::get('/tambahadmin', function () {
    return view('tambahadmin');
});
Route::get('/tambahproduk', function () {
    return view('tambahproduk');
});



