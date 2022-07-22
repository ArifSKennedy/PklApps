<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use App\Models\pengunjung;
use App\Models\transaksi;
use App\Models\detailtransaksi;
use App\Models\kamar;

class PegawaiController extends Controller
{
    //
    public function pegawai(){
        $karyawan = karyawan::all();
        $pengunjung = pengunjung::all();
        $transaksi = transaksi::all();
        $detailtransaksi = detailtransaksi::all();
        $kamar = kamar::all();
        return view('post.pegawai', compact('karyawan','pengunjung','transaksi','detailtransaksi','kamar'));
    }
}
