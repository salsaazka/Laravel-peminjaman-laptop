<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

Route::get('/', [BorrowController::class, 'index'])->name('index');
Route::get('/create', [BorrowController::class, 'create'])->name('create');
Route::post('/store', [BorrowController::class, 'store'])->name('store');

// Route::get('/', function(){
//    return view('dashboard.index');
// });
