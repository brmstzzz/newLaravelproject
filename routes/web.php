<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProgramStudiController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/mahasiswa', [MahasiswaController::class,"index"]);

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('program-studi', ProgramStudiController::class);

Route::get('/mahasiswa/create', [MahasiswaController::class,
'create'])->name('mahasiswa.create');

Route::get('/mahasiswa/{mahasiswa}/edit',
[MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::
class, 'update'])->name('mahasiswa.update');

Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::
class, 'destroy'])->name('mahasiswa.destroy');