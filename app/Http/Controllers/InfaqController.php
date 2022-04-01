<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Infaq;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Validator;

class InfaqController extends Controller
{
    public function index(){
        $listInfaq = Infaq::latest('created_at')->get();
        $listInfaq = $listInfaq->map(function($item) {
            $item->tanggal = Carbon::createFromFormat('Y-m-d', $item->tanggal)->isoFormat('DD, MMMM Y');
            return $item;
        });
        $totalData = Infaq::count();

        $pemasukkan = DB::table('laporan_infaq')->where('jenis', 1)->sum('total');
        $pengeluaran = DB::table('laporan_infaq')->where('jenis', 0)->sum('total');
        $totalSaldo = $pemasukkan - $pengeluaran;
        return view('admin.pages.Infaq.index', compact('listInfaq', 'totalData', 'totalSaldo'));
    }

    public function infaqData($id) {
        $infaq = Infaq::where('id', $id)->firstOrFail();
        $infaq->makeHidden(['created_at', 'updated_at']);
        return response()->json($infaq);
    }

    public function infaqDelete(Request $request) {
        $request->validate([
            'infaq_id' => 'required|integer',
        ]);

        $findInfaq = Infaq::where('id', $request->infaq_id)->firstOrFail();
        $title = $findInfaq->perihal;
        $findInfaq->delete();

        return redirect()->route('infaq_list')->with('success', 'Anda berhasil menghapus laporan infaq dengan perihal '.$title);
    }

    public function infaqEdit(Request $request) {
        $rules = [
            'perihal' => 'required',
            'total' => 'required|integer',
            'jenis_modal' => 'required',
            'tanggal' => 'required',
            'infaq_id' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            $result = [
                'status' => 'fail',
                'message' => 'periksa kembali data yang anda input.'
            ];
            return response()->json($result);
        }

        $infaq = Infaq::where('id', $request->infaq_id)->firstOrFail();
        $infaq->perihal = $request->perihal;
        $infaq->total = $request->total;
        $infaq->jenis = $request->jenis_modal;
        $infaq->tanggal = $request->tanggal;
        $infaq->save();

        $result = [
            'status' => 'ok',
            'message' => 'Anda berhasil memperbarui data.'
        ];

        return response()->json($result);
    }

    public function infaqAdd(Request $request) {
        $request->validate([
            'perihal' => 'required',
            'total' => 'required|integer',
            'jenis' => 'required',
            'tanggal' => 'required'
        ]);

        $userid = auth()->user()->id;

        Infaq::create([
            'perihal' => $request->perihal,
            'total' => $request->total,
            'jenis' => $request->jenis,
            'tanggal' => $request->tanggal,
            'user_id' => $userid
        ]);

        return redirect()->route('infaq_list')->with('success', 'Anda berhasil menambahkan data laporan infaq.');
    }
}
