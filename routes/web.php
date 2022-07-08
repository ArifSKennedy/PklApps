<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/belajar', function () {
    echo "<center>";
    echo "<u>";
    echo "<h1>HALO SEMUA</h1>";
    echo "<h1>KAMI Sedang belajar laravel dasar</h1>";
    echo "</u>";
    echo "</center>";
});
Route::get('/tengah', function () {
    echo "<p style='text-align:center;'>tengah</p>";
});

//Route basic lanjut ke view
Route::get('/home', function (){
     return view('home');
});
Route::get('/index', function (){
    return view('pages.index');
});
Route::get('/about', function (){
    return view('pages.about');
});
Route::get('/beranda', function (){
    return view('pages.beranda');
});


// ROUTE parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jeniskelamin}/{kelas}/{hobby}', function ($a, $b, $c, $d, $e, $f){
    return view('pages.biodata', compact('a','b','c','d','e','f'));
});

//route optional parameter 
Route::get('pesanan/{makanan?}', function($a = "pesanan kosong") {
    return view('pages.pesanan', compact('a'));
});

Route::get('pesanan/{makanan?}', function($ayamgoreng = "pesanan kosong") {
    return view('pages.pesanan', compact('a'));
});

Route::get('makanan/{pilih?}', function($pilih = "Mohon maaf pesanan tidak ada") {
    return view('pages.makanan', compact('pilih'));
});
