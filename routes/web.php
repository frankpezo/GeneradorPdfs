<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [PdfController::class, 'users'])->name('users');
Route::get('/pdf/{user}', [PdfController::class, 'pdf'])->name('pdf');