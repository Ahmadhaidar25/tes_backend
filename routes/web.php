<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContollerTiket;
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
Route::get('/',[AuthController::class, 'auth']);
Route::post('auth-post',[AuthController::class, 'auth_post']);
Route::get('sign-up',[AuthController::class, 'sign_up']);
Route::get('logout',[AuthController::class, 'logout']);
Route::get('beli',[ContollerTiket::class, 'beli']);
Route::post('/beli/tiket',[ContollerTiket::class, 'beli_tiket']);
Route::get('/cetak/{id}',[ContollerTiket::class, 'cetak']);
Route::post('post-register',[AuthController::class, 'post_register']);
Route::get('home',[HomeController::class, 'index']);
Route::get('semua_pesanan',[ContollerTiket::class, 'semua_pesanan']);
Route::get('/edit/{id}',[ContollerTiket::class, 'edit']);
Route::get('/hapus/{id}',[ContollerTiket::class, 'hapus']);