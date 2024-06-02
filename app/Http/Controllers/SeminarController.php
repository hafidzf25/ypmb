<?php

namespace App\Http\Controllers;
use App\Models\Seminar;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function seminar(Request $request)
    {
        $search = $request->input('search');
        
        $data = Seminar::select('id_seminar', 'nama_seminar', 'tanggal_awal', 'tanggal_akhir', 'foto_sampul')
            ->when($search, function ($query, $search) {
                return $query->where('nama_seminar', 'like', '%' . $search . '%');
            })
            ->paginate(8);

        $title = "Seminar"; // Set the title

        return view('seminar', compact('data', 'title'));
    }

    public function detailseminar($id) {
        Carbon::setLocale('id');
        
        $data = Seminar::where('id_seminar', $id)->first();

        $title = $data->nama_seminar;
        $data->tanggal_awal = Carbon::parse($data->tanggal_awal)->format('d F Y');
        $data->tanggal_akhir = Carbon::parse($data->tanggal_akhir)->format('d F Y');

        return view('detailseminar', compact('data', 'title'));
    }
}
