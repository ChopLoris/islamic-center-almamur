<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class LayananController extends Controller
{
    public function index() {
        $listLayanan = Layanan::all();
        return view('admin.pages.Layanan.index', compact('listLayanan'));
    }

    public function addLayanan(Request $request) {
        $request->validate([
            'name' => 'required',
            'nama_kontak' => 'required',
            'no_tlp' => 'required',
            'image_content' => 'required|mimes:jpg,png',
        ]);

        $userid = auth()->user()->id;

        $file = $request->file('image_content');
        $filename = time()."_".$file->getClientOriginalName();
        $path = Storage::putFileAs('public/images/layanan', $file, $filename);

        if(!$path) {
            return back()->with('failed', 'Terjadi kesalahan saat upload files.');
        }

        Layanan::create([
            'name' => $request->name,
            'kontak_nama' => $request->nama_kontak,
            'no_telepon' => $request->no_tlp,
            'filename_images' => $filename,
            'user_id' => $userid
        ]);

        return redirect()->route('layanan_list')->with('success', 'Anda berhasil menambahkan data Layanan.');
    }


    public function layananData($id) {
        $layanan = Layanan::where('id', $id)->firstOrFail();
        $layanan->makeHidden(['created_at', 'updated_at']);
        return response()->json($layanan);
    }

    public function layananDelete(Request $request) {
        $request->validate([
            'layanan_id' => 'required|integer',
        ]);

        $layanan = Layanan::where('id', $request->layanan_id)->firstOrFail();
        $content = Storage::disk('images')->exists('layanan/'.$layanan->filename_images);

        if($content) {
            Storage::disk('images')->delete('layanan/'.$layanan->filename_images);
        }
        $title = $layanan->name;
        $layanan->delete();

        return redirect()->route('layanan_list')->with('success', 'Anda berhasil menghapus data layanan '.$title);
    }


    public function editLayanan(Request $request) {
        $request->validate([
            'name' => 'required',
            'nama_kontak' => 'required',
            'no_tlp' => 'required',
            'layanan_id' => 'required',
        ]);

        $layanan = Layanan::where('id', $request->layanan_id)->firstOrFail();

        if($request->hasFile('image_content')) {

            $oldfilename = $layanan->filename_images;
            $content = Storage::disk('images')->exists('layanan/'.$oldfilename);

            if($content) {
                Storage::disk('images')->delete('layanan/'.$oldfilename);
            }

            //Upload new File
            $file = $request->file('image_content');
            $filename = time()."_".$file->getClientOriginalName();
            $layanan->filename_images = $filename;
            Storage::putFileAs('public/images/layanan', $file, $filename);
        }

        $layanan->name = $request->name;
        $layanan->kontak_nama = $request->nama_kontak;
        $layanan->no_telepon = $request->no_tlp;

        $layanan->save();

        return back()->with('success', 'Anda berhasil mengubah data.');
    }
}
