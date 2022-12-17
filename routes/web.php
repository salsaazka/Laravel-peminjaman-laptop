<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

Route::middleware('isGuest')->group(function(){
    Route::get('/', [BorrowController::class, 'login'])->name('login');
    Route::get('/register', [BorrowController::class, 'register']);
    Route::post('/register', [BorrowController::class, 'inputRegister'])->name('register.post');
    Route::post('/login', [BorrowController::class, 'auth'])->name('login.auth');
});

// Route::get('/home', [BorrowController::class, 'index'])->name('home');
Route::get('/logout', [BorrowController::class, 'logout'])->name('logout');

Route::middleware('isLogin')->group(function () {
    Route::get('/home', [BorrowController::class, 'index'])->name('index');
    Route::get('/create', [BorrowController::class, 'create'])->name('create');
    Route::post('/store', [BorrowController::class, 'store'])->name('store');
    Route::get('/data', [BorrowController::class, 'data'])->name('data');
    Route::get('/edit/{id}', [BorrowController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [BorrowController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [BorrowController::class, 'destroy'])->name('delete');
    Route::get('/borrows/pdf', [BorrowController::class, 'createPDF']);
// Route::get('/', function(){
//    return view('dashboard.index');
});
