<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index() {
        $galleryList = Gallery::all();
        return view('admin.pages.Gallery.index', compact('galleryList'));
    }

    public function uploadImages(Request $request) {
        if($request->hasFile('file')) {
            $destination_path = 'public/images/gallery';
            $count = 1;
            $filess = [];
            foreach($request->file('file') as $files)
            {
                if($files->isValid())
                {
                    $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$files->getClientOriginalName());
                    $files->storeAs($destination_path, $filename);
                    $filess[] = [
                        'filename' => $filename,
                        'created_at' => Carbon::now()
                    ];
                    $count++;
                }
            }
            try{
                Gallery::insert($filess);
                $message = [
                    'error' => false,
                    'message' => 'Berhasil mengupload file untuk data Surat Masuk dengan nomor kode penyimpanan '
                ];
            } catch (QueryException $e) {
                $message = [
                    'error' => true,
                    'message' => 'Terjadi kesalahan saat menyimpan data, tanyakan admin yang bertugas'
                ];
            }
            return response()->json($message);
        }
    }

    public function galleryDelete(Request $request) {
        $request->validate([
            'gallery_id' => 'required|integer',
        ]);

        $gallery = Gallery::where('id', $request->gallery_id)->firstOrFail();
        $content = Storage::disk('images')->exists('gallery/'.$gallery->filename);

        if($content) {
            Storage::disk('images')->delete('gallery/'.$gallery->filename);
        }
        $title = $gallery->filename;
        $gallery->delete();

        return redirect()->route('gallery_list')->with('success', 'Anda berhasil menghapus foto gallery dengan filename '.$title);
    }
}
