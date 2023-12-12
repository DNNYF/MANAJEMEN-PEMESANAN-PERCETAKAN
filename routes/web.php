<?php


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\productController;
use App\Http\Controllers\tambahadmin;
use App\Models\adminModel;
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


Route::get('/login', function () {
    return view('login');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('/', function () {
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

Route::get('/pesananClient', function () {
    return view('pesananClient');
});
Route::get('/poloroute', function () {
    return view('poloroute');
});
Route::get('/konfirmasi', function () {
    return view('konfirmasipesanan');
});


Route::resource('product', productController::class);
Route::get('/login',[logincontroller::class,'index']);
Route::get('/register',[Registercontroller::class,'index']);
Route::post('/login/login',[logincontroller::class,'login']);

Route::resource('tambahadmin', tambahadmin::class);
Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});