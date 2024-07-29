<?php

use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return view('landingPage');
});

Route::get('/login', [LoginController::class, 'formLogin'])->name('loginPage');
Route::post('/login', [LoginController::class, 'postLogin']);

Route::middleware(['auth:admin'])->group(function () {
    Route::post('/logout', 'App\Http\Controllers\LoginController@logout');

    Route::get('/dashboard', [ListBarangController::class, 'showDashboard'])->name('dashboard')->middleware(('auth'));
});
