<?php

namespace App\Http\Controllers;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PelatihanController extends Controller
{
    public function pelatihan(Request $request)
    {
        $search = $request->input('search');
        
        $data = Pelatihan::select('id_pelatihan', 'nama_pelatihan', 'tanggal_awal', 'tanggal_akhir', 'foto_sampul', 'deskripsi_singkat', 'deskripsi_lengkap')
            ->when($search, function ($query, $search) {
                return $query->where('nama_pelatihan', 'like', '%' . $search . '%');
            })
            ->paginate(8);

        $title = "Pelatihan"; // Set the title

        return view('pelatihan', compact('data', 'title'));
    }

    public function detailpelatihan($id) {
        Carbon::setLocale('id');
        
        $data = Pelatihan::where('id_pelatihan', $id)->first();

        $title = $data->nama_pelatihan;
        $data->tanggal_awal = Carbon::parse($data->tanggal_awal)->format('d F Y');
        $data->tanggal_akhir = Carbon::parse($data->tanggal_akhir)->format('d F Y');

        return view('detailpelatihan', compact('data', 'title'));
    }
}
