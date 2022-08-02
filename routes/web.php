<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProdukController;


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

Route::get('/', function () {
    return view('homecjl');
});


Route::get('/mesin', function () {
    return view('mesin');
});

Route::get('/machinetool', function () {
    return view('machinetool');
});

Route::get('/aksesoris', function () {
    return view('aksesoris');
});

Route::get('/cuttingtool', function () {
    return view('cuttingtool');
});

Route::get('/measuringtool', function () {
    return view('measuringtool');
});

Route::get('/handtool', function () {
    return view('handtool');
});

Route::get('/cuttingcoolant', function () {
    return view('cuttingcoolant');
});

Route::get('/abrasive', function () {
    return view('abrasive');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/newproducts', function () {
    return view('newproducts');
});

Route::resource('sales', SalesController::class)->middleware('can:isAdmin');
Route::resource('produk', ProdukController::class)->middleware('can:isAdmin');
Route::resource('sales', SalesController::class)->only('show')->middleware('can:isAdminSales');
Route::resource('user', UserController::class)->middleware('can:isAdmin');


Route::get('/CJL/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


