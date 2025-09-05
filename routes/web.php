<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home.home'); })->name('home');
Route::get('/about', function () { 
    return view('abouts.about', [
        'nama' => 'Yafi Nuqman Elianto',
        'nim' => '24/540133/SV/24782',
        'kelas' => "BB"
    ]); 
})->name('about');