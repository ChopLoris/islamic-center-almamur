<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegumumanController extends Controller
{
    public function index() {
        return view('admin.pages.Pengumuman.tambah');
    }
}
