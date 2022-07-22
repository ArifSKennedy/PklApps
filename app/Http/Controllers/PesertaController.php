<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peserta;
class PesertaController extends Controller
{
    //
    public function peserta(){
        $peserta = peserta::all();
        return view('post.peserta', compact('peserta'));
    }
}
