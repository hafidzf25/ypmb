<?php

namespace App\Http\Controllers;

use App\Models\PartisipanSeminar;
use App\Models\Pelatihan;
use App\Models\PembayaranPelatihan;
use App\Models\Seminar;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $datapelatihan = Pelatihan::select('id_pelatihan', 'nama_pelatihan', 'tanggal_awal', 'tanggal_akhir', 'foto_sampul', 'deskripsi_singkat', 'deskripsi_lengkap')
            ->when($search, function ($query, $search) {
                return $query->where('nama_pelatihan', 'like', '%' . $search . '%');
            })
            ->paginate(4);

        foreach ($datapelatihan as $pelatihan) {
            $pelatihan->totalPendaftar = PembayaranPelatihan::where('id_pelatihan', $pelatihan->id_pelatihan)->count();
        }

        $dataseminar = Seminar::select('id_seminar', 'nama_seminar', 'tanggal_seminar', 'foto_sampul')
            ->when($search, function ($query, $search) {
                return $query->where('nama_seminar', 'like', '%' . $search . '%');
            })
            ->paginate(4);

        foreach ($dataseminar as $seminar) {
            $seminar->totalPendaftar = PartisipanSeminar::where('id_seminar', $seminar->id_seminar)->count();
        }

        $title = "Index"; // Set the title

        return view('index', compact('datapelatihan', 'dataseminar', 'title'));
    }
}
