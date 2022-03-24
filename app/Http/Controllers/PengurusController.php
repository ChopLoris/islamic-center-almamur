<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PengurusController extends Controller
{
    public function index() {
        return view('admin.pages.Pengurus.tambah');
    }

    public function list_index() {
        $listArtikel = Artikel::where('kategori_id', 1)->get();
        return view('admin.pages.Pengurus.list', compact('listArtikel'));
    }

    public function edit_index($id) {
        $kategoriArtikel = KategoriArtikel::all();
        $dataArtikel = Artikel::where([['id', $id], ['kategori_id', 1]])->firstOrFail();
        return view('admin.pages.Pengurus.edit', compact('dataArtikel', 'kategoriArtikel'));
    }

    public function postArtikel(Request $request) {
        $request->validate([
            'title' => 'required',
            'organisasi' => 'required',
            'content' => 'required',
            'image_content' => 'required|mimes:jpg,png',
        ]);

        $file = $request->file('image_content');
        $filename = time()."_".$file->getClientOriginalName();
        $path = Storage::putFileAs('public/images/artikel', $file, $filename);

        if(!$path) {
            return back()->with('failed', 'Terjadi kesalahan saat upload files.');
        }

        $userid = auth()->user()->id;

        $slug = Str::limit(preg_replace('/\s+/', '-', strtolower($request->title)), 200)."-".uniqid();
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);

        Artikel::create([
            'title' => $request->title,
            'kategori_id' => 1,
            'organisasi' => $request->organisasi,
            'slug' => $slug,
            'user_id' => $userid,
            'content' => $request->content,
            'filename_images' => $filename,
        ]);

        return back()->with('success', 'Anda berhasil menambahkan Pengurus baru.');
    }

    public function edit_post(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'organisasi' => 'required',
            'content' => 'required',
        ]);

        $findArtikel = Artikel::where('id', $id)->firstOrFail();

        if($request->hasFile('image_content')) {

            $oldfilename = $findArtikel->filename_images;
            $content = Storage::disk('images')->exists('artikel/'.$oldfilename);

            if($content) {
                Storage::disk('images')->delete('artikel/'.$oldfilename);
            }

            //Upload new File
            $file = $request->file('image_content');
            $filename = time()."_".$file->getClientOriginalName();
            $findArtikel->filename_images = $filename;
            Storage::putFileAs('public/images/artikel', $file, $filename);
        }

        $findArtikel->title = $request->title;
        $findArtikel->organisasi = $request->organisasi;
        $findArtikel->content = $request->content;

        $findArtikel->save();

        return back()->with('success', 'Anda berhasil mengubah data ini.');
    }

    public function deleteArtikel (Request $request) {
        $request->validate([
            'article_id' => 'required|integer',
        ]);

        $findArtikel = Artikel::where('id', $request->article_id)->firstOrFail();
        $title = $findArtikel->title;
        $findArtikel->delete();

        $oldfilename = $findArtikel->filename_images;
        $content = Storage::disk('images')->exists('artikel/'.$oldfilename);
        if($content) {
            Storage::disk('images')->delete('artikel/'.$oldfilename);
        }

        return redirect()->route('pengurus_list')->with('success', 'Anda berhasil menghapus data pengurus dengan nama '.$title);
    }
}
