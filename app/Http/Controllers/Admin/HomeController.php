<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Seminar;
use App\Models\Pelatihan;

class HomeController extends Controller
{
    public function index(){
        $totalUser = User::count();
        $totalSeminar = Seminar::count();
        $totalPelatihan = Pelatihan::count();

        return view('admin.dashboard', ['totalUser' => $totalUser, 'totalSeminar' => $totalSeminar, 'totalPelatihan' => $totalPelatihan]);
    }
}
