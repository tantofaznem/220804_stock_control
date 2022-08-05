<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', [AdminController::class, 'index'])->name('admin');

Route::get('register', [AdminController::class, 'register'])->name('register');

Route::post('signup', [AdminController::class, 'signup'])->name('signup');

Route::get('dashboard', [AdminController::class, 'dashboard']);

Route::post('admin_login', [AdminController::class, 'admin_login'])->name('admin_login');

Route::get('logout', [AdminController::class, 'logout'])->name('logout');
