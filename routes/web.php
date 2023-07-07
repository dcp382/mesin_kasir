<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenBarController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Models\Supplier;
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
    return view('auth.login');
});

Route::group(['middleware'=>['auth','admin']],function(){
    Route::prefix('/admin')->name('admin.')->group(function (){
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/customer',[CustomerController::class,'index'])->name('customer');
        Route::get('/tambah_customer',[CustomerController::class,'form_tambah'])->name('form_tambah_customer');
        Route::post('/tambah_customer/store',[CustomerController::class,'store'])->name('store_customer');
        Route::delete('/customer/delete/{id}',[CustomerController::class,'destroy'])->name('hapus_customer'); //belum bisa
        Route::get('/jenis_barang',[JenBarController::class,'index'])->name('index_jenbar');
        Route::post('/jenis_barang/store',[JenBarController::class,'store'])->name('store_jenbar');
        Route::get('/supplier',[SupplierController::class,'index'])->name('index_supplier');
        Route::get('/user',[UserController::class,'index'])->name('user');
        Route::get('/tambah_user',[UserController::class,'form_tambah'])->name('form_tambah_user');
        route::post('/tambah_user/store',[UserController::class,'store'])->name('store_user');
    });
});

Route::group(['middleware'=>['auth','user']],function(){
    Route::prefix('/user')->name('user.')->group(function (){
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// })->middleware(['auth','admin'])->name('dashboard');

require __DIR__.'/auth.php';
