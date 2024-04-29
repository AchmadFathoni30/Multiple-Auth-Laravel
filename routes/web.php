<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'viewLogin'])->name('login');
    Route::post('/', [SesiController::class, 'Login']);    
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [SesiController::class, 'logout']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/adminKeuangan', [AdminController::class, 'DashboardKeuangan'])->middleware('userAkses:keuangan'); 
    Route::get('/adminOperator', [AdminController::class, 'DashboardOperator'])->middleware('userAkses:operator');
    Route::get('/adminMarketing', [AdminController::class, 'DashboardMarketing'])->middleware('userAkses:marketing');
});