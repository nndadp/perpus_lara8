<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\StudentsController;


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
    return view('auth.welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'logout']);

///////////////////////////////////////////////////////////////////////////////////////
Route::resource('perpus', MasterController::class);

Route::resource('rombel', RombelController::class);

Route::resource('rayon', RayonController::class);
Route::resource('buku', bukuController::class);
Route::resource('formulir', PeminjamanController::class);
Route::resource('students', StudentsController::class);

Route::get('/home', function () {
    return view('perpus.home');
});

