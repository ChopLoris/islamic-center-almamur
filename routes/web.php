<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\AuthController;
use Illuminate\Routing\RouteGroup;

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
Route::post('/administrator/login', [AuthController::class, 'postLogin'])->name('postLogin');

Route::middleware(['auth'])->group(function () {
    //ADMINISTRATOR
    Route::get('/administrator/dashboard', [AdminController::class, 'index'])->name('admin_dashboard');

    //ARTIKEL
    Route::get('/administrator/artikel/tambah', [ArtikelController::class, 'index'])->name('artikel_tambah');
    Route::get('/administrator/artikel/list', [ArtikelController::class, 'list_index'])->name('artikel_list');
    Route::post('/administrator/artikel/tambah', [ArtikelController::class, 'postArtikel'])->name('postArtikel');
    Route::get('/administrator/artikel/edit/{id}', [ArtikelController::class, 'edit_index']);
    Route::put('/administrator/artikel/edit/{id}', [ArtikelController::class, 'edit_post'])->name('postEdit');
    Route::delete('/administrator/artikel/delete/{id}', [ArtikelController::class, 'deleteArtikel'])->name('artikel_delete');

    Route::get('/administrator/logout', [AuthController::class, 'signOut'])->name('logout');
});
