<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Product\ListProduct;
use App\Http\Livewire\Admin\Product\SimpartProduct;
use App\Http\Livewire\Admin\Product\StockProduct;
use App\Http\Livewire\Admin\Users\FormUser;
use App\Http\Livewire\Admin\Users\ListUsers;
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
    return view('welcome');
});

Route::get('adminpanel/dashboard', DashboardController::class)->name('admin.dashboard');
Route::get('adminpanel/user/manage', ListUsers::class)->name('admin.listusers');
Route::get('adminpanel/user/form', FormUser::class)->name('admin.form');
Route::get('adminpanel/product/list', ListProduct::class)->name('admin.listproduct');
Route::get('adminpanel/product/simpart', SimpartProduct::class)->name('admin.simpartproduct');

Route::get('adminpanel/product/stok', StockProduct::class)->name('admin.stockproduct');