<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('dashboard', [UserController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('user/create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
Route::post('user', [UserController::class, 'store'])->name('user.store')->middleware('auth');
Route::get('user/{usuario}/edit', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::patch('user/{usuario}', [UserController::class, 'update'])->name('user.update')->middleware('auth');
Route::delete('usuario/{usuario}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');

Route::post('login', [Controller::class, 'login'])->name('login.login');
Route::post('logout', [Controller::class, 'logout'])->name('logout.logout');