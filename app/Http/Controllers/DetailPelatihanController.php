<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Pelatihan;

class DetailPelatihanController extends Controller
{
    public function pembayaran($id) {
        Carbon::setLocale('id');
        
        $data = Pelatihan::where('id_pelatihan', $id)->first();

        $title = $data->nama_pelatihan;
        $data->tanggal_awal = Carbon::parse($data->tanggal_awal)->format('d F Y');
        $data->tanggal_akhir = Carbon::parse($data->tanggal_akhir)->format('d F Y');

        return view('pembayaran', compact('data', 'title'));
    }
}
