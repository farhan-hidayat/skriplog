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
Route::post('api/fetch-majors', [App\Http\Controllers\landing\UploadController::class, 'fetchMajors'])->name('fetch-majors');
Route::post('/upload', [App\Http\Controllers\landing\UploadController::class, 'store'])->name('upload-store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\dashboard\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('faculties', FacultyController::class);
    Route::resource('majors', MajorController::class);
    Route::get('/skripsi', [App\Http\Controllers\dashboard\ThesisController::class, 'skripsi'])->name('skripsi');
    // Route::get('/faculties/create', [App\Http\Controllers\dashboard\FilesController::class, 'create'])->name('tambah_fak');
    Route::get('/tesis', [App\Http\Controllers\dashboard\ThesisController::class, 'tesis'])->name('tesis');
    Route::get('/details/{id}', [App\Http\Controllers\dashboard\ThesisController::class, 'edit'])->name('details');
});
