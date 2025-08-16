<?php

use App\Http\Controllers\TransactionController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Livewire\Post;

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

Route::get('counter', Counter::class)->name('counter');

Route::get('posts', Post::class)->name('posts.index');
