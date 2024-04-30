<?php

use App\Http\Controllers\produkController;
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

Route ::get('/', function(){
    return view('produk/index');
});

Route ::resource('produk',produkController::class);

Route ::get('array',function(){
    return 'Halaman Array';
});
