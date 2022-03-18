<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index() {
        //$waktuSholat = getTimeSholat("bekasi");
        return view('home2');
    }

    public function index2() {
        $waktuSholat = getTimeSholat("bekasi");
        return view('home', compact('waktuSholat'));
    }
}
