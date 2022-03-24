<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{
    public function index() {
        $agendaList = Agenda::all();
        return view('admin.pages.Agenda.index', compact('agendaList'));
    }

    public function deleteAgenda(Request $request) {
        $request->validate([
            'agenda_id' => 'required|integer',
        ]);

        $findAgenda = Agenda::where('id', $request->agenda_id)->firstOrFail();
        $content = Storage::disk('images')->exists('agenda-jumat/'.$findAgenda->image_content);

        if($content) {
            Storage::disk('images')->delete('agenda-jumat/'.$findAgenda->image_content);
        }

        $title = $findAgenda->title;
        $findAgenda->delete();

        return redirect()->route('agenda_list')->with('success', 'Anda berhasil menambahkan agenda Jum\'at Terbaru');
    }

    public function postAgenda(Request $request) {
        $request->validate([
            'imam' => 'required',
            'tanggal_mulai' => 'required',
        ]);

        $payload = [
            'imam' => $request->imam,
            'tanggal_mulai' => $request->tanggal_mulai
        ];

        if($request->hasFile('image_content')) {
            //Upload new File
            $file = $request->file('image_content');
            $filename = time()."_".$file->getClientOriginalName();
            Storage::putFileAs('public/images/agenda-jumat', $file, $filename);
            $payload += [ 'image_content' => $filename ];
        }

        if($request->has('khatib')) {
            $payload += [ 'khatib' => $request->khatib ];
        }
        if($request->has('muadzin')) {
            $payload += [ 'muadzin' => $request->muadzin ];
        }
        if($request->has('bilal')) {
            $payload += [ 'bilal' => $request->bilal ];
        }

        Agenda::create($payload);

        return redirect()->route('agenda_list')->with('success', 'Anda berhasil menambahkan Agenda Jum\'\at terbaru');
    }
}
