<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Arahkan halaman utama ke dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard'); // Beri nama 'dashboard'

// Rute Riwayat Semester
Route::get('/riwayat', function () {
    return view('riwayat');
})->name('riwayat'); // Beri nama 'riwayat'

// Rute Mata Kuliah (gunakan tanda hubung)
Route::get('/mata-kuliah', function () {
    return view('mata-kuliah');
})->name('mata-kuliah'); // Beri nama 'mata-kuliah'

// Tambahkan rute login dan register jika diperlukan nanti
// Route::get('/login', function () { ... })->name('login');
// Route::get('/register', function () { ... })->name('register');

// Jika Anda menggunakan Otentikasi Laravel (Breeze/Jetstream)
// require __DIR__.'/auth.php';