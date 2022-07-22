<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
class SiswaController extends Controller
{
    //
    public function siswa(){
        $siswa = siswa::all();
        return view('post.murid', compact('siswa'));
    }
}
