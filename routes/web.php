<?php

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
Route::get('categories', [App\Http\Controllers\landing\CategoryController::class, 'index'])->name('categories');
Route::get('upload', [App\Http\Controllers\landing\UploadController::class, 'index'])->name('upload');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\dashboard\DashboardController::class, 'index'])->name('dashboard');
});
