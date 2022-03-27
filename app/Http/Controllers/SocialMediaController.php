<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    public function index() {
        $sosmedList = [
            'youtube' => NULL,
        ];
        if(SocialMedia::count() > 0) {
            $sosmedList = SocialMedia::all();
        }
        return view('admin.pages.Informasi.index', compact('sosmedList'));
    }

    public function postData(Request $request) {

        if((int)SocialMedia::count() > 0) {
            $socialmedia = SocialMedia::where('id', 1)->firstOrFail();
            $socialmedia->update($request->all());
        } else {
            SocialMedia::create($request->all());
        }

        return redirect()->route('social_media')->with('success', 'Anda berhasil menyimpan data baru untuk infomasi social media.');
    }
}
