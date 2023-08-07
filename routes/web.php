<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'check_admin'], 'as' => 'admin.'], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('profile', [AdminController::class, 'create'])->name('profile');
    Route::post('profile/edit/{id}', [AdminController::class, 'update']);
    Route::post('password/edit/{id}', [ChangePasswordController::class, 'store']);
    Route::get('users', [AdminController::class, 'show'])->name('users');

});


Route::get('/', [HomeController::class, 'index']);

Auth::routes();
