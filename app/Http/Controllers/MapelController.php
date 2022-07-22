<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\peserta;
use App\Models\mapel;

class MapelController extends Controller
{
    //
    public function mapel(){
        // Memanggil semua tabel Menggunakan Conttroler \\
        $peserta = peserta::all();
        $mapel = Mapel::all();
        $siswa = siswa::all();
        return view('post.mapel', compact('peserta','siswa','mapel'));
    }
}
