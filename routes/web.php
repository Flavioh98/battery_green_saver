<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColetaController;

Route::get('/', [ColetaController::class, 'read']);

Route::get('/politica', function () {
    return view('politica');
})->name('politica'); 

Route::get('/admin', function () {
    return view('auth.login');
})->name('admin'); 

// Route::get('/criar', function () {
    // return view('criar'); 
    Route::get('/criar', [ColetaController::class, 'criar'])->name('criar');
// })->name('criar'); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [ColetaController::class, 'read'])->name('dashboard');
});
