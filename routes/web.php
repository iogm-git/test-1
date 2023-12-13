<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MsCustomerController;
use App\Http\Controllers\MsItemController;
use App\Http\Controllers\MsSalesmanController;
use App\Http\Controllers\MsUserController;
use App\Http\Controllers\TxSalesController;
use App\Http\Controllers\TxSubSalesController;
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

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index');
});

Route::middleware('auth')->group(function () {
    Route::get('user/export', [MsUserController::class, 'export']);
    Route::resource('user', MsUserController::class);
    Route::get('item/export', [MsItemController::class, 'export']);
    Route::resource('item', MsItemController::class);
    Route::get('salesman/export', [MsSalesmanController::class, 'export']);
    Route::resource('salesman', MsSalesmanController::class);
    Route::get('customer/export', [MsCustomerController::class, 'export']);
    Route::resource('customer', MsCustomerController::class);
    Route::get('tx-sales/export', [TxSalesController::class, 'export']);
    Route::resource('tx-sales', TxSalesController::class)->parameters(['tx-sales' => 'tx-sales']);
    Route::get('tx-sub-sales/export', [TxSubSalesController::class, 'export']);
    Route::resource('tx-sub-sales', TxSubSalesController::class)->parameters(['tx-sub-sales' => 'tx-sub-sales']);
});

Route::controller(LoginController::class)->middleware('guest')->group(function () {
    Route::get('login', 'view')->name('login');
    Route::post('login', 'login');
});
