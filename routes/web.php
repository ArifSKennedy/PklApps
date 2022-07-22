<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SlotController;
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

Route::get('makanan/{pilih?}/{pilih2?}', function($pilih = "Mohon maaf pesanan tidak ada", $pilih2 = "pesanan tidak ada") {
    return view('pages.makanan', compact('pilih','pilih2'));
});

use App\Http\Controllers\PengenalanController;

// Passing data dari controller ke view
Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);

// Passing data dinamis(Route parameter) dari controller ke view
Route::get('/intro/{nama}/{alamat}/{umur}', [App\Http\Controllers\PengenalanController::class, 'intro']);

Route::get('/siswa', [App\Http\Controllers\PengenalanController::class, 'siswa']);

Route::get('/menu', [App\Http\Controllers\LatihanController::class, 'menu']);

Route::get('/dosen', [App\Http\Controllers\LatihanController::class, 'dosen']);
Route::get('/televisi', [App\Http\Controllers\LatihanController::class, 'televisi']);
Route::get('/post', [PostController::class, 'index']);

Route::get('/murid', [SiswaController::class, 'siswa']);
Route::get('/peserta', [PesertaController::class, 'peserta']);
Route::get('/mapel', [MapelController::class, 'mapel']);
Route::get('/pegawai', [PegawaiController::class, 'pegawai']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::resource('slot', SlotController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
