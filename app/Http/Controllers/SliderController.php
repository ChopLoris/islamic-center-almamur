<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index() {
        $Images =  [
            'slider_1' => NULL,
        ];

        if((int)Slider::count() > 0) {
            $Images =  Slider::where('id', 1)->get();
        }
        //dd($Images);
        return view('admin.pages.Slider.index', compact('Images'));
    }

    public function postData(Request $request) {

        if((int)Slider::count() > 0) {
            $findImage = Slider::where('id', 1)->firstOrFail();
            $update = true;
        } else {
            $findImage = new Slider();
            $update = false;
        }

        if($request->hasFile('slider1')) {
            $file = $request->file('slider1');
            $filename = time()."_".$file->getClientOriginalName();
            $path = Storage::putFileAs('public/images/slider', $file, $filename);
            if($update) {
                $checkfiles = $this->deleteImages('slider_1');
            }
            $findImage->slider_1 = $filename;
        }

        if($request->hasFile('slider2')) {
            $file = $request->file('slider2');
            $filename = time()."_".$file->getClientOriginalName();
            $path = Storage::putFileAs('public/images/slider', $file, $filename);
            if($update) {
                $checkfiles = $this->deleteImages('slider_2');
            }
            $findImage->slider_2 = $filename;
        }

        if($request->hasFile('slider3')) {
            $file = $request->file('slider3');
            $filename = time()."_".$file->getClientOriginalName();
            $path = Storage::putFileAs('public/images/slider', $file, $filename);
            if($update) {
                $checkfiles = $this->deleteImages('slider_3');
            }
            $findImage->slider_3 = $filename;
        }

        if($request->hasFile('slider4')) {
            $file = $request->file('slider4');
            $filename = time()."_".$file->getClientOriginalName();
            $path = Storage::putFileAs('public/images/slider', $file, $filename);
            if($update) {
                $checkfiles = $this->deleteImages('slider_4');
            }
            $findImage->slider_4 = $filename;
        }

        $save = $findImage->save();

        if($save) {
            return redirect()->route('slider')->with('success', 'Anda berhasil menambahkan salah satu foto slider.');
        }
    }

    public function deletebyPost($type) {

        $findImage = Slider::where('id', 1)->firstOrFail();
        $oldfilename = $findImage[$type];
        $content = Storage::disk('images')->exists('slider/'.$oldfilename);
        if($content) {
            Storage::disk('images')->delete('slider/'.$oldfilename);
        }

        $findImage[$type] = NULL;

        $findImage->save();

        return redirect()->route('slider')->with('success', 'Anda berhasil menghapus salah satu foto slider.');
    }

    public function deleteImages($number) {
        $findImage = Slider::where('id', 1)->firstOrFail();
        $oldfilename = $findImage[$number];
        $content = Storage::disk('images')->exists('slider/'.$oldfilename);
        if($content) {
            Storage::disk('images')->delete('slider/'.$oldfilename);
        }

        return true;
    }
}
