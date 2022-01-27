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

Route::resource('ofertas', GangaController::class)->only('update', 'edit','create','store')->middleware(['auth','admin']);
Route::resource('ofertas', GangaController::class)->except('update', 'edit','create','store');

Route::get('/', [\App\Http\Controllers\LandingPage::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/contacte', function () {
    return view('contacte');
});

Route::get('/gangas', [\App\Http\Controllers\GangaController::class, 'index'])->name('oferta.index');
Route::get('/show/{id}', [\App\Http\Controllers\GangaController::class, 'show'])->name('oferta.show');
Route::get('/delete/{id}', [\App\Http\Controllers\GangaController::class,'destroy'])->name('oferta.delete')->middleware(['auth','admin']);
