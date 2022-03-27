<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SocialMedia;
use App\Models\Gallery;
use Illuminate\Support\Carbon;
use \App\Models\Infaq;
use \App\Models\Artikel;
use \App\Models\Agenda;
use \App\Models\KategoriArtikel;
use DB;
use App\Models\Slider;
use Illuminate\Support\Str;

class Home extends Controller
{
    public function index() {
        //SOSMED
        $socialmedia = SocialMedia::first();
        $waktuSholat = getTimeSholat("bekasi");

        //TIME NOW
        $dt = Carbon::now();
        $time = Carbon::createFromFormat('Y-m-d H:i:s', $dt)->isoFormat('dddd, D MMMM Y');

        //INFAQ
        $infaqList = Infaq::orderBy('created_at', 'desc')->paginate(5);
        $pemasukkan = DB::table('laporan_infaq')->where('jenis', 1)->sum('total');
        $pengeluaran = DB::table('laporan_infaq')->where('jenis', 0)->sum('total');
        $totalSaldo = $pemasukkan - $pengeluaran;

        //SLIDER
        $slider =  Slider::first();

        //PENGURUS
        $pengurus = Artikel::where('kategori_id', 1)->get();

        //ARTIKEL
        $callArtikel = Artikel::where('kategori_id', '!=', 1)->get();
        $artikel = $callArtikel->map(function ($artikels) {
            $artikels->content = Str::of(strip_tags($artikels->content))->limit(110);
            return $artikels;
        });

        //PETUGAS
        //Carbon::createFromFormat('Y-m-d H:i:s', $date)->isoFormat('DD, MMMM Y');
        $petugas = Agenda::latest('id')->first();
        if($petugas) {
            $petugas->tanggal_mulai = Carbon::createFromFormat('Y-m-d', $petugas->tanggal_mulai)->isoFormat('DD, MMMM Y');
        }

        //GALLERY
        $gallery = Gallery::all();

        return view('home2', compact('waktuSholat', 'socialmedia', 'time', 'infaqList', 'totalSaldo', 'slider', 'pengurus', 'gallery', 'artikel', 'petugas'));
    }
}
