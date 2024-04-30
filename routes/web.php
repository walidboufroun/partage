<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AdminController::class, 'index']);
Route::get('/welcome', [AdminController::class, 'index']);
Route::get('/files', [AdminController::class, 'files'])->name('file.index');

Route::get('/ajouter-file', [AdminController::class, 'ajouterFileForm'])->name('admin.ajouter_file_form');
Route::post('/upload', [AdminController::class, 'uploadFile'])->name('admin.upload');


Route::get('file/download', [AdminController::class, 'download'])->name('file.download');
Route::get('file/preview', [AdminController::class, 'preview'])->name('file.preview');