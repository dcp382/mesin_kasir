<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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
        Route::get('/user',[UserController::class,'index'])->name('user');
        Route::get('/tambah_user',[UserController::class,'form_tambah'])->name('form_tambah');
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
