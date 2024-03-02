<?php

namespace App\Http\Controllers;
use App\Models\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $data = Index::select('id_pelatihan', 'nama_pelatihan', 'tanggal_awal', 'tanggal_akhir', 'foto_sampul', 'id_jenjang')
            ->when($search, function ($query, $search) {
                return $query->where('nama_pelatihan', 'like', '%' . $search . '%');
            })
            ->paginate(4);

        $title = "Index"; // Set the title

        return view('index', compact('data', 'title'));
    }
}
