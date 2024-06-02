<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AnggotaController extends Controller
{
    public function pembayaran() {
        return view('pembayaran');
    }
}
