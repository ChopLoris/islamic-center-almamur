<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Infaq;
use DB;
use App\Models\Artikel;
use App\Models\User;

class AdminController extends Controller
{
    public function index() {
        $countArtikel = Artikel::where('kategori_id', '!=', 1)->count();
        $countPengurus = Artikel::where('kategori_id', 1)->count();
        $countUser = User::count();

        //INFAQ
        $listInfaq = Infaq::latest('created_at')->get();
        $totalData = Infaq::count();

        $pemasukkan = DB::table('laporan_infaq')->where('jenis', 1)->sum('total');
        $pengeluaran = DB::table('laporan_infaq')->where('jenis', 0)->sum('total');
        $totalSaldo = $pemasukkan - $pengeluaran;


        return view('admin.pages.dashboard', compact('listInfaq', 'totalSaldo', 'countArtikel', 'countPengurus', 'countUser'));
    }
}
