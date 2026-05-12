<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return redirect('/admin/dashboard');
        } elseif (auth()->user()->role === 'karyawan') {
            return redirect('/karyawan/dashboard');
        }
        return view('pelanggan.index'); // <-- Ini yang akan menampilkan halaman "Mau Makan Apa?"
    })->name('dashboard');
    
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->middleware(['role:admin'])->name('admin.dashboard');

    Route::get('/karyawan/dashboard', function () {
        return view('karyawan.index');
    })->middleware(['role:karyawan'])->name('karyawan.dashboard');
});


