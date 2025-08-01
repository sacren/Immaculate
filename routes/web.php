<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('transactions.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::resource('transactions', TransactionController::class);

Route::view('action', 'action');
