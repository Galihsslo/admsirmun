<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\BendaharaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SekertarisController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('admin', [AdminController::class, 'index'])->middleware(['auth','verified','role:admin']);
    Route::get('bendahara', [BendaharaController::class, 'index'])->middleware(['auth','verified','role:bendahara']);
    Route::get('operator', [OperatorController::class, 'index'])->middleware(['auth','verified','role:operator']);

    //kegiatan
    Route::get('kegiatan', [KegiatanController::class, 'index'])->name('kegiatan-index')->middleware(['auth','verified','permission:lihat-kegiatan']);
    Route::get('kegiatan/edit/id',[KegiatanController::class, 'update'])->name('ubah-kegiatan')->middleware(['auth','verified','permission:ubah-kegiatan']);
    Route::get('kegiatan/create', [KegiatanController::class, 'store'])->name('tambah-kegiatan')->middleware(['auth','verified','permission:tambah-kegiatan']);
    Route::post('kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store')->middleware(['auth','verified','permission:lihat-kegiatan']);
    Route::delete('kegiatan/destroy/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy')->middleware(['auth','verified','permission:hapus-kegiatan']);
    // Route::post('kegiatan/update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update')->middleware(['auth','verified','permission:ubah-kegiatan']);
});





require __DIR__.'/auth.php';
