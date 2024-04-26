<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about',function(){
    return 'Ini adalah halaman <b>about</b>';
});

Route::get('mahasiswa',function(){
    return 'Ini adalah halaman <b>mahasiswa</b>';
});

Route::get('profile',function(){
    $nama = 'Tri';
    return 'Ini adalah halaman <b>profile</b>, nama saya adalah '. $nama;
});