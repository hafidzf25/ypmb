<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Pelatihan;
use App\Models\PembayaranPelatihan;
use Illuminate\Support\Facades\File;

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

    public function editpembayaran($id, $id_user) {
        Carbon::setLocale('id');
        
        $data = Pelatihan::where('id_pelatihan', $id)->first();
        $datapartisipan = PembayaranPelatihan::where('id_pelatihan', $id)->where('id_user', $id_user)->first();

        $title = $data->nama_pelatihan;
        $data->tanggal_awal = Carbon::parse($data->tanggal_awal)->format('d F Y');
        $data->tanggal_akhir = Carbon::parse($data->tanggal_akhir)->format('d F Y');

        return view('editpembayaran', compact('data', 'datapartisipan', 'title'));
    }
}
