<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // inin adalah tempat edit untuk fungsi dan perintah
    public function dataSiswa(){
        $siswa1 = 'Ahmad'; $asal1 = 'Jakarta';
        $siswa2 = 'Taufik'; $asal2 = 'Tangsel';
        return view('data_siswa',compact('siswa1','siswa2','asal1','asal2'));
    }
}
