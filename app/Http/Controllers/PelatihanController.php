<?php

namespace App\Http\Controllers;
use App\Models\Pelatihan;
use App\Models\PembayaranPelatihan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class PelatihanController extends Controller
{
    public function index(){
        $pelatihans = Pelatihan::select('id_pelatihan', 'nama_pelatihan', 'tanggal_awal', 'tanggal_akhir', 'deskripsi_singkat', 'deskripsi_lengkap', 'status')->get();

        return view('admin.pelatihanTable', compact('pelatihans'));
    }

    public function search(Request $request){
        $search = $request->get('search');
        $pelatihans = Pelatihan::where('nama_pelatihan', 'like', '%' . $search . '%')->get();
        return view('admin.pelatihanTable', compact('pelatihans'));
    }

    public function pelatihan(Request $request)
    {
        $search = $request->input('search');
        
        $data = Pelatihan::select('id_pelatihan', 'nama_pelatihan', 'tanggal_awal', 'tanggal_akhir', 'foto_sampul', 'deskripsi_singkat', 'deskripsi_lengkap')
            ->when($search, function ($query, $search) {
                return $query->where('nama_pelatihan', 'like', '%' . $search . '%');
            })
            ->paginate(8);

            foreach ($data as $pelatihan) {
                $pelatihan->totalPendaftar = PembayaranPelatihan::where('id_pelatihan', $pelatihan->id_pelatihan)->count();
            }

        $title = "Pelatihan"; // Set the title

        return view('pelatihan', compact('data', 'title'));
    }

    public function detailpelatihan($id) {
        Carbon::setLocale('id');
        
        $data = Pelatihan::where('id_pelatihan', $id)->first();

        $title = $data->nama_pelatihan;
        $data->tanggal_awal = Carbon::parse($data->tanggal_awal)->format('d F Y');
        $data->tanggal_akhir = Carbon::parse($data->tanggal_akhir)->format('d F Y');

        $id_user = auth()->id();
        $status = 0;
        $exists = 0;

        $exists = PembayaranPelatihan::where('id_user', $id_user)
            ->where('id_pelatihan', $id)
            ->exists();

        $datapartisipan = PembayaranPelatihan::where('id_user', $id_user)
            ->where('id_pelatihan', $id)
            ->first();

        $sertifikat = 'null';
        if ($datapartisipan != null) {
            if ($datapartisipan->sertifikat == '') {
                $sertifikat = 'null';
            } else {
                $sertifikat = $datapartisipan->sertifikat;
            }
        }

        if ($exists) {
            $status = 1;
        }

        return view('detailpelatihan', compact('data', 'title', 'status', 'sertifikat', 'datapartisipan'));
    }

    public function create(){
        return view('admin.addPelatihan');
    }

    public function store(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'nama_pelatihan' => 'required|string|max:255',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'deskripsi_singkat' => 'required|string',
            'deskripsi_lengkap' => 'required|string',
            'foto_sampul' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // If validation fails, return back with errors
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $filename = $request->input('existing_foto_sampul', null);
        if ($request->hasFile('foto_sampul')) {
            $file = $request->file('foto_sampul');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/pelatihan'), $filename);
        }
    
        // Create a new pelatihan with the validated data and set status to 1
        $pelatihans = new Pelatihan([
            'nama_pelatihan' => $request->input('nama_pelatihan'),
            'tanggal_awal' => $request->input('tanggal_awal'),
            'tanggal_akhir' => $request->input('tanggal_akhir'),
            'deskripsi_singkat' => $request->input('deskripsi_singkat'),
            'deskripsi_lengkap' => $request->input('deskripsi_lengkap'),
            'foto_sampul' => $filename,
            'link' => null,
            'status' => 1, // Set status to 1
        ]);
    
        // Save the pelatihan to the database
        $pelatihans->save();
    
        // Redirect to the pelatihan list or any other page with a success message
        return redirect()->route('admin.pelatihan')->with('success', 'pelatihan created successfully');
    }
    
    public function edit(Request $request, $id_pelatihan) {
        $pelatihans = Pelatihan::find($id_pelatihan);

        return view('admin.editpelatihan', compact('pelatihans'));
    }

    public function update(Request $request, $id_pelatihan){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'nama_pelatihan' => 'required|string|max:255',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'deskripsi_singkat' => 'required|string',
            'deskripsi_lengkap' => 'required|string',
            'foto_sampul' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'nullable|string|max:255',
        ]);
    
        // If validation fails, return back with errors
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }
    
        $pelatihans = Pelatihan::find($id_pelatihan);
    
        $filename = $request->input('existing_foto_sampul', $pelatihans->foto_sampul);
        if ($request->hasFile('foto_sampul')) {
            $file = $request->file('foto_sampul');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/pelatihan'), $filename);
        }
    
        // Update the pelatihan with the validated data
        $pelatihans->update([
            'nama_pelatihan' => $request->input('nama_pelatihan'),
            'tanggal_awal' => $request->input('tanggal_awal'),
            'tanggal_akhir' => $request->input('tanggal_akhir'),
            'deskripsi_singkat' => $request->input('deskripsi_singkat'),
            'deskripsi_lengkap' => $request->input('deskripsi_lengkap'),
            'link' => $request->input('link'),
            'foto_sampul' => $filename,
        ]);
    
        // Redirect to the pelatihan list or any other page with a success message
        return redirect()->route('admin.pelatihan')->with('success', 'pelatihan updated successfully');
    }
    

    public function delete(Request $request, $id_pelatihan) {
        $pelatihans = Pelatihan::find($id_pelatihan);
        
        if ($pelatihans) {
            $pelatihans->delete();
        }
        
        return redirect()->route('admin.pelatihan')->with('success', 'User deleted successfully');
    }

    public function toggleStatus($id_pelatihan) {
        $pelatihans = Pelatihan::find($id_pelatihan);

        if ($pelatihans) {
            // Toggle the active status
            $pelatihans->status = $pelatihans->status ? 0 : 1;
            $pelatihans->save();
        }

        return redirect()->route('admin.pelatihan')->with('success', 'User status updated successfully');
    }

    public function participants($id_pelatihan)
    {
        $pelatihan = Pelatihan::findOrFail($id_pelatihan);
        $participants = PembayaranPelatihan::with('user')->where('id_pelatihan', $id_pelatihan)->get();
    
        return view('admin/pelatihanparticipants', compact('pelatihan', 'participants'));
    }
}
