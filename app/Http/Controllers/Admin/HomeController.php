<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Seminar;
use App\Models\Pelatihan;
use App\Models\Admin;

class HomeController extends Controller
{
    public function index(){
        $totalUser = User::count();
        $totalSeminar = Seminar::count();
        $totalPelatihan = Pelatihan::count();
        $totalPengurus = Admin::count();

        $seminar_terbaru = Seminar::select('id_seminar', 'nama_seminar', 'tanggal_seminar', 'waktu_seminar','status')
                                        ->orderBy('id_seminar', 'desc')
                                        ->take(5)
                                        ->get();

        $pelatihan_terbaru = Pelatihan::select('id_pelatihan', 'nama_pelatihan', 'tanggal_awal', 'tanggal_akhir','status')
                                        ->orderBy('id_pelatihan', 'desc')
                                        ->take(5)
                                        ->get();

        return view('admin.dashboard', ['totalUser' => $totalUser, 'totalSeminar' => $totalSeminar, 'totalPelatihan' => $totalPelatihan, 'totalPengurus' => $totalPengurus, 'seminar_terbaru' => $seminar_terbaru, 'pelatihan_terbaru' => $pelatihan_terbaru]);
    }
}
