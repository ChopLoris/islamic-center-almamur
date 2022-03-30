<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SocialMedia;
use App\Models\Gallery;
use Illuminate\Support\Carbon;
use \App\Models\Infaq;
use \App\Models\Artikel;
use \App\Models\Agenda;
use App\Models\Layanan;
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
        $callArtikel = Artikel::whereNotIn('kategori_id', [1, 2, 3])->get();
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

        //AGENDA
        $callAgenda = Artikel::where('kategori_id', 2)->get();
        $agenda = $callAgenda->map(function ($agendas) {
            $agendas->content = Str::of(strip_tags($agendas->content))->limit(110);
            return $agendas;
        });

        //PENGUMUMAN
        $callPengumuman = Artikel::where('kategori_id', 3)->get();
        $pengumuman = $callPengumuman->map(function ($pengumumans) {
            $pengumumans->content = Str::of(strip_tags($pengumumans->content))->limit(110);
            return $pengumumans;
        });

        //KategoryArtikel
        $kategori = KategoriArtikel::orderBy('created_at', 'desc');
        $semuaKategori = $kategori->get();

        //Menu Artikel
        $kategoriArtikel = $kategori->whereNotIn('id', [1,2,3])->paginate(4);

        //GALLERY
        $gallery = Gallery::all();

        //LAYANAN
        $layanan = Layanan::orderBy('created_at', 'desc')->paginate(4);

        return view('home.home2', compact('waktuSholat', 'socialmedia', 'time', 'infaqList', 'totalSaldo', 'slider', 'pengurus', 'gallery', 'artikel', 'petugas', 'agenda', 'pengumuman', 'layanan', 'kategoriArtikel', 'semuaKategori'));
    }


    public function listArtikel () {
        $waktuSholat = getTimeSholat("bekasi");
        //KategoryArtikel
        $kategori = KategoriArtikel::orderBy('created_at', 'desc');
        $semuaKategori = $kategori->get();

        //Menu Artikel
        $kategoriArtikel = $kategori->whereNotIn('id', [1,2,3])->paginate(4);

        return view('home.list-artikel', compact('waktuSholat', 'semuaKategori', 'kategoriArtikel'));
    }



    public function showArticle() {
        $waktuSholat = getTimeSholat("bekasi");
        //KategoryArtikel
        $kategori = KategoriArtikel::orderBy('created_at', 'desc');
        $semuaKategori = $kategori->get();

        //Menu Artikel
        $kategoriArtikel = $kategori->whereNotIn('id', [1,2,3])->paginate(4);

        return view('home.artikel', compact('waktuSholat', 'semuaKategori', 'kategoriArtikel'));
    }
}
