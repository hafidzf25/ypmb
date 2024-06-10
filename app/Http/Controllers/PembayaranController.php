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

    public function toggleStatusP($id_ppp) {
        $pembayaran = PembayaranPelatihan::find($id_ppp);

        if ($pembayaran) {
            // Toggle the active konfirmasi
            $pembayaran->konfirmasi = $pembayaran->konfirmasi ? 0 : 1;
            $pembayaran->save();
        }

        return redirect()->back()->with('success', 'User konfirmasi updated successfully');
    }
}
