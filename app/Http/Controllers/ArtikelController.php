<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index() {
        $kategoriArtikel = KategoriArtikel::all();
        return view('admin.pages.artikel', compact('kategoriArtikel'));
    }

    public function list_index() {
        $listArtikel = Artikel::all();
        return view('admin.pages.list-artikel', compact('listArtikel'));
    }

    public function edit_index($id) {
        $kategoriArtikel = KategoriArtikel::all();
        $dataArtikel = Artikel::where('id', $id)->firstOrFail();
        return view('admin.pages.edit-artikel', compact('dataArtikel', 'kategoriArtikel'));
    }

    public function edit_post(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'jenis' => 'required|integer',
            'content' => 'required',
        ]);

        $findArtikel = Artikel::where('id', $id)->firstOrFail();
    }

    public function postArtikel(Request $request) {
        $request->validate([
            'title' => 'required',
            'jenis' => 'required|integer',
            'content' => 'required',
            'image_content' => 'required|mimes:jpg,png',
        ]);

        $file = $request->file('image_content');
        $filename = time()."_".$file->getClientOriginalName();
        $path = $file->storeAs('public/images/artikel', $filename);

        if(!$path) {
            return back()->with('failed', 'Terjadi kesalahan saat upload files.');
        }

        $userid = auth()->user()->id;

        $slug = Str::limit(preg_replace('/\s+/', '-', strtolower($request->title)), 200)."-".uniqid();

        Artikel::create([
            'title' => $request->title,
            'kategori_id' => $request->jenis,
            'slug' => $slug,
            'user_id' => $userid,
            'content' => $request->content,
            'image-file-name' => $filename,
        ]);

        return back()->with('success', 'Anda berhasil menambahkan Artikel Terbaru.');
    }
}
