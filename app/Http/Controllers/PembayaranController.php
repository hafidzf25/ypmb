<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranPelatihan;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    public function store(Request $request)
    {
        $path = null;
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = 'images/' . $filename;
        }

        PembayaranPelatihan::create([
            'id' => $request->id,
            'id_pelatihan' => $request->id_pelatihan,
            'konfirmasi' => 0, 
            'bukti_pembayaran' => $path,
        ]);

        return redirect()->back()->with('success', 'Pembayaran berhasil dikirim!');
    }
}
