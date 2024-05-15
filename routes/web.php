<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', [AdminController::class, 'index']);
Route::get('/welcome', [AdminController::class, 'index']);
Route::get('/files', [AdminController::class, 'files'])->name('file.index');

Route::get('/ajouter_file', [AdminController::class, 'ajouterFileForm'])->name('ajouter_file');
Route::post('/upload', [AdminController::class, 'uploadFile'])->name('admin.upload');


Route::get('file/download/{file}', [AdminController::class, 'download'])->name('file.download');
Route::get('file/preview/{file}', [AdminController::class, 'preview'])->name('file.preview');

Route::get('/users_create', [UserController::class, 'create'])->name('users_create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');