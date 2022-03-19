<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\AuthController;

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

Route::get('/', [Home::class, 'index']);
Route::get('/administrator', [AuthController::class, 'index'])->name('administrator');
Route::get('/administrator/dashboard', [AdminController::class, 'index']);
Route::post('/administrator/login', [AuthController::class, 'postLogin'])->name('postLogin');
