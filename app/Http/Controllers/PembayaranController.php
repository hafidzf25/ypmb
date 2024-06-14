<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranPelatihan;

class PembayaranController extends Controller
{
    public function store(Request $request)
    {
        // Check if a payment record already exists
        $existingPayment = PembayaranPelatihan::where('id_user', $request->id_user)
            ->where('id_pelatihan', $request->id_pelatihan)
            ->first();

        if ($existingPayment) {
            return redirect()->back()->with('error', 'Anda sudah melakukan pemabayaran pada pelatihan ini, pembayaran anda sedang diverifikasi');
        }

        $path = null;
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/bukti_pembayaran'), $filename);
            $path = 'images/bukti_pembayaran/' . $filename;
        }

        PembayaranPelatihan::create([
            'id_user' => $request->id_user,
            'id_pelatihan' => $request->id_pelatihan,
            'konfirmasi' => 0,
            'bukti_pembayaran' => $path,
        ]);

        return redirect()->back()->with('success', 'Pembayaran pelatihan berhasil dikirim!');
    }

    public function toggleStatusP($id_ppp, $konfirmasi)
    {
        $pembayaran = PembayaranPelatihan::find($id_ppp);

        if ($pembayaran) {
            // Toggle the active konfirmasi
            $pembayaran->konfirmasi = $konfirmasi;
            $pembayaran->save();
        }

        return redirect()->back()->with('success', 'User konfirmasi updated successfully');
    }

    public function edit(Request $request)
    {
        // Cari data yang akan diupdate
        $datapartisipan = PembayaranPelatihan::find($request->id_partisipan_pelatihan);

        $path = null;
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/bukti_pembayaran'), $filename);
            $path = 'images/bukti_pembayaran/' . $filename;
        }

        // Update data
        $datapartisipan->konfirmasi = 0;
        $datapartisipan->bukti_pembayaran = $path;

        // Simpan perubahan
        $datapartisipan->save();

        return redirect()->back()->with('success', 'Pembayaran pelatihan berhasil diubah!');
    }

    public function upload(Request $request)
    {
        // Validasi file
        $request->validate([
            'files.*' => 'required|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:20480'
        ]);

        $uploadedFilePaths = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('images/testing'), $filename);
                $path = 'images/testing/' . $filename;
                $uploadedFilePaths[] = $path;
            }
        }

        // Anda bisa melakukan penyimpanan data file ke database atau logika lainnya di sini

        return redirect()->back()->with('success', 'Files have been successfully uploaded!');
    }
}
