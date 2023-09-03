<?php

use App\Http\Controllers\dashboard\FacultyController;
use App\Http\Controllers\dashboard\MajorController;
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

Route::get('/', [App\Http\Controllers\landing\LandingController::class, 'index'])->name('home');
Route::get('/kategori', [App\Http\Controllers\landing\CategoryController::class, 'index'])->name('kategori');
Route::get('/upload', [App\Http\Controllers\landing\UploadController::class, 'index'])->name('upload');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\dashboard\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('faculties', FacultyController::class);
    Route::resource('majors', MajorController::class);
    Route::get('/skripsi', [App\Http\Controllers\dashboard\SkripsiController::class, 'skripsi'])->name('skripsi');
    // Route::get('/faculties/create', [App\Http\Controllers\dashboard\FilesController::class, 'create'])->name('tambah_fak');
    Route::get('/tesis', [App\Http\Controllers\dashboard\SkripsiController::class, 'tesis'])->name('tesis');
    Route::get('/details', [App\Http\Controllers\dashboard\SkripsiController::class, 'edit'])->name('details');
});
