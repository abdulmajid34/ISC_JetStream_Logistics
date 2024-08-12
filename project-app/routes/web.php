<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Models\CustomerList;
use Illuminate\Support\Facades\Route;

/*s
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

    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard')->middleware(('auth'));

    // route item management
    Route::get('/items', [ItemController::class, 'showItemList'])->name('items')->middleware(('auth'));


    // route customer 
    Route::get('/customers', [CustomerController::class, 'showCustomerList'])->name('customers')->middleware(('auth'));
    // route employee
    Route::get('/employees', [EmployeeController::class, 'showEmployeeList'])->name('employees')->middleware(('auth'));
    Route::get('/createForm', [EmployeeController::class, 'create'])->name('createForm')->middleware('can:role,"supervisor"');
    Route::post('/createForm', [EmployeeController::class, 'store']);
    Route::get('/editForm/{id}', [EmployeeController::class, 'edit'])->name('editForm')->middleware('can:role,"supervisor"');
    Route::put('/editForm/{id}', [EmployeeController::class, 'update']);
    Route::delete('/destroy/{id}', [EmployeeController::class, 'destroy']);
    // route report
});
