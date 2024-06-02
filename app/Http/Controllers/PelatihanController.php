<?php

namespace App\Http\Controllers;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function pelatihan(Request $request)
    {
        $search = $request->input('search');
        
        $data = Pelatihan::select('id_pelatihan', 'nama_pelatihan', 'tanggal_awal', 'tanggal_akhir', 'foto_sampul', 'id_jenjang')
            ->when($search, function ($query, $search) {
                return $query->where('nama_pelatihan', 'like', '%' . $search . '%');
            })
            ->paginate(8);

        $title = "Pelatihan"; // Set the title

        return view('pelatihan', compact('data', 'title'));
    }
}
