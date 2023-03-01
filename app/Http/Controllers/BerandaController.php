<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemohon;
use App\survey;
use App\galeri;

class BerandaController extends Controller
{
    public function index()
    {
        $jumlah_pemohon = Pemohon::count();
        $jumlah_survey = Survey::count();
        $jumlah_galeri = Galeri::count();

       return view('beranda.index')
       ->with('jumlah_pemohon',$jumlah_pemohon)
       ->with('jumlah_survey',$jumlah_survey)
       ->with('jumlah_galeri',$jumlah_galeri);
    //    ->with('kembali',$kembali);
    }
}
