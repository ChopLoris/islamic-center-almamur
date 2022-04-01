<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\SliderController;
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
Route::get('/article/show/{slug}', [Home::class, 'showArticle']);
Route::get('/article/list/{nameKategori?}', [Home::class, 'listArtikel'])->name('home_artikel_list');
Route::get('/laporan-infaq', [Home::class, 'laporanInfaq'])->name('index_laporanInfaq');

Route::middleware(['auth'])->group(function () {
    //ADMINISTRATOR
    Route::get('/administrator/dashboard', [AdminController::class, 'index'])->name('admin_dashboard');

    //Settings
    Route::get('/administrator/settings', [AuthController::class, 'settings'])->name('users_setting');

    //USER CONTROL
    Route::get('/administrator/list-users', [AuthController::class, 'adminIndex'])->name('users_list');
    Route::post('/administrator/list-users/add', [AuthController::class, 'register'])->name('users_add');
    Route::post('/administrator/list-users/edit', [AuthController::class, 'edit'])->name('users_edit');
    Route::get('/administrator/list-users/info/{id}', [AuthController::class, 'userData'])->name('users_data');
    Route::delete('/administrator/list-users/delete', [AuthController::class, 'deleteUser'])->name('users_delete');

    //LAYANAN
    Route::get('/administrator/layanan', [LayananController::class, 'index'])->name('layanan_list');
    Route::post('/administrator/layanan/post', [LayananController::class, 'addLayanan'])->name('layanan_post');
    Route::post('/administrator/layanan/edit', [LayananController::class, 'editLayanan'])->name('layanan_edit');
    Route::get('/administrator/layanan/info/{id}', [LayananController::class, 'layananData']);
    Route::delete('/administrator/layanan/delete', [LayananController::class, 'layananDelete'])->name('layanan_delete');

    //Gallery
    Route::get('/administrator/gallery', [GalleryController::class, 'index'])->name('gallery_list');
    Route::post('/administrator/gallery/upload', [GalleryController::class, 'uploadImages'])->name('gallery_post');
    Route::delete('/administrator/gallery/delete', [GalleryController::class, 'galleryDelete'])->name('gallery_delete');

    //Agenda Jum'at
    Route::get('/administrator/agenda', [AgendaController::class, 'index'])->name('agenda_list');
    Route::delete('/administrator/agenda/delete', [AgendaController::class, 'deleteAgenda'])->name('agenda_delete');
    Route::post('/administrator/agenda/post', [AgendaController::class, 'postAgenda'])->name('agenda_post');
    Route::post('/administrator/agenda/edit', [AgendaController::class, 'postAgenda'])->name('agenda_edit');

    //SOCIALMEDIA
    Route::get('/administrator/social-media', [SocialMediaController::class, 'index'])->name('social_media');
    Route::post('/administrator/social-media/post', [SocialMediaController::class, 'postData'])->name('sosmed_post');

    //Slider
    Route::get('/administrator/slider', [SliderController::class, 'index'])->name('slider');
    Route::post('/administrator/slider/post', [SliderController::class, 'postData'])->name('slider_post');
    Route::get('/administrator/slider/delete/{type}', [SliderController::class, 'deletebyPost'])->name('delete_slide');

    //LAPORAN INFAQ
    Route::get('/administrator/infaq', [InfaqController::class, 'index'])->name('infaq_list');
    Route::get('/administrator/infaq/info/{id}', [InfaqController::class, 'infaqData']);
    Route::post('/administrator/infaq/post', [InfaqController::class, 'infaqAdd'])->name('infaq_post');
    Route::post('/administrator/infaq/edit', [InfaqController::class, 'infaqEdit'])->name('infaq_edit');
    Route::delete('/administrator/infaq/delete', [InfaqController::class, 'infaqDelete'])->name('infaq_delete');

    //ARTIKEL
    Route::get('/administrator/pengurus/tambah', [PengurusController::class, 'index'])->name('pengurus_tambah');
    Route::get('/administrator/pengurus/list', [PengurusController::class, 'list_index'])->name('pengurus_list');
    Route::post('/administrator/pengurus/tambah', [PengurusController::class, 'postArtikel'])->name('postArtikel');
    Route::get('/administrator/pengurus/edit/{id}', [PengurusController::class, 'edit_index']);
    Route::put('/administrator/pengurus/edit/{id}', [PengurusController::class, 'edit_post'])->name('postEdit');
    Route::delete('/administrator/pengurus/delete', [PengurusController::class, 'deleteArtikel'])->name('pengurus_delete');

    //Pengurus
    Route::get('/administrator/artikel/tambah', [ArtikelController::class, 'index'])->name('artikel_tambah');
    Route::get('/administrator/artikel/list', [ArtikelController::class, 'list_index'])->name('artikel_list');
    Route::post('/administrator/artikel/tambah', [ArtikelController::class, 'postArtikel'])->name('postArtikel');
    Route::get('/administrator/artikel/edit/{id}', [ArtikelController::class, 'edit_index']);
    Route::put('/administrator/artikel/edit/{id}', [ArtikelController::class, 'edit_post'])->name('postEdit');
    Route::delete('/administrator/artikel/delete', [ArtikelController::class, 'deleteArtikel'])->name('artikel_delete');

    Route::get('/administrator/logout', [AuthController::class, 'signOut'])->name('logout');
});
