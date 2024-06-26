<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ParticipantsExport;

use App\Models\PartisipanSeminar;
use App\Models\Seminar;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SeminarController extends Controller
{
    public function index()
    {
        $seminars = Seminar::select('id_seminar', 'nama_seminar', 'tanggal_seminar', 'waktu_seminar', 'deskripsi_singkat', 'deskripsi_lengkap', 'status')->get();

        return view('admin.seminarTable', compact('seminars'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $seminars = Seminar::where('nama_seminar', 'like', '%' . $search . '%')->get();
        return view('admin.seminarTable', compact('seminars'));
    }

    public function seminar(Request $request)
    {
        $search = $request->input('search');
        
        $data = Seminar::select('id_seminar', 'nama_seminar', 'tanggal_seminar', 'waktu_seminar', 'foto_sampul')
            ->when($search, function ($query, $search) {
                return $query->where('nama_seminar', 'like', '%' . $search . '%');
            })
            ->paginate(8);

        foreach ($data as $seminar) {
            $seminar->totalPendaftar = PartisipanSeminar::where('id_seminar', $seminar->id_seminar)->count();
        }

        $title = "Seminar"; // Set the title

        return view('seminar', compact('data', 'title'));
    }

    public function detailseminar($id)
    {
        Carbon::setLocale('id');

        $data = Seminar::where('id_seminar', $id)->first();

        // Set locale to Indonesian
        Carbon::setLocale('id');

        $modifiedTime = date("H:i", strtotime($data->waktu_seminar));

        $data->waktu_seminar = $modifiedTime;

        // Parse and format the date
        $tgl_pelaksanaan = Carbon::parse($data->tanggal_seminar)->isoFormat('dddd, D MMMM YYYY');

        $title = $data->nama_seminar;
        $data->tanggal_seminar = Carbon::parse($data->tanggal_seminar)->format('d F Y');

        $id_user = auth()->id();
        $status = 0;
        $exists = 0;

        $exists = PartisipanSeminar::where('id_user', $id_user)
            ->where('id_seminar', $id)
            ->exists();

        $datapartisipan = PartisipanSeminar::where('id_user', $id_user)
            ->where('id_seminar', $id)
            ->first();

        $sertifikat = 'null';
        $isSertif = 0;

        if ($datapartisipan != null) {
            if ($datapartisipan->sertifikat == '') {
                $sertifikat = 'null';
            } else {
                $sertifikat = $datapartisipan->sertifikat;
                $isSertif = public_path('doc/Sertifikat_Seminar/' . $datapartisipan->sertifikat);

                if (File::exists($isSertif)) {
                    $isSertif = 1;
                } else {
                    $isSertif = 0;
                }
            }
        }

        if ($exists) {
            $status = 1;
        }

        return view('detailseminar', compact('data', 'title', 'status', 'sertifikat', 'tgl_pelaksanaan', 'isSertif'));
    }

    public function daftarseminar(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'id_user' => 'required',
            'id_seminar' => 'required',
        ]);

        $datapartisipan = PartisipanSeminar::where('id_user', $request->id_user)
            ->where('id_seminar', $request->id_seminar)
            ->first();
        
        $post = new PartisipanSeminar();
        $post->id_user = $request->id_user;
        $post->id_seminar = $request->id_seminar;
        $post->sertifikat = $request->id_seminar . '_' . auth()->user()->email . '.pdf';

        if ($datapartisipan == null) {
            // Buat post baru berdasarkan data yang diterima dari request
            $post->save();

            Carbon::setLocale('id');

            $data = Seminar::where('id_seminar', $post->id_seminar)->first();

            $title = $data->nama_seminar;
            $data->tanggal_awal = Carbon::parse($data->tanggal_awal)->format('d F Y');
            $data->tanggal_akhir = Carbon::parse($data->tanggal_akhir)->format('d F Y');

            // Redirect ke halaman atau rute yang sesuai
            return redirect()->route('detailseminar', ['id' => $post->id_seminar, 'title' => $title])->with('message', 'Post berhasil disimpan.');
        } else {
            Carbon::setLocale('id');

            $data = Seminar::where('id_seminar', $post->id_seminar)->first();

            $title = $data->nama_seminar;
            $data->tanggal_awal = Carbon::parse($data->tanggal_awal)->format('d F Y');
            $data->tanggal_akhir = Carbon::parse($data->tanggal_akhir)->format('d F Y');

            // Redirect ke halaman atau rute yang sesuai
            return redirect()->route('detailseminar', ['id' => $post->id_seminar, 'title' => $title])->with('message', 'Post berhasil disimpan.');
        }
    }

    public function create()
    {
        return view('admin.addSeminar');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'nama_seminar' => 'required|string|max:255',
            'tanggal_seminar' => 'required|date',
            'waktu_seminar' => 'required',
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
            $file->move(public_path('images/seminar'), $filename);
        }

        // Create a new seminar with the validated data and set status to 1
        $seminar = new Seminar([
            'nama_seminar' => $request->input('nama_seminar'),
            'tanggal_seminar' => $request->input('tanggal_seminar'),
            'waktu_seminar' => $request->input('waktu_seminar'),
            'deskripsi_singkat' => $request->input('deskripsi_singkat'),
            'deskripsi_lengkap' => $request->input('deskripsi_lengkap'),
            'foto_sampul' => $filename,
            'link' => null,
            'status' => 1, // Set status to 1
            'surat_undangan' => null,
        ]);

        // Save the seminar to the database
        $seminar->save();

        // Redirect to the seminar list or any other page with a success message
        return redirect()->route('admin.seminar')->with('success', 'Seminar created successfully');
    }

    public function edit(Request $request, $id_seminar)
    {
        $seminars = Seminar::find($id_seminar);

        return view('admin.editSeminar', compact('seminars'));
    }

    public function update(Request $request, $id_seminar)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'nama_seminar' => 'required|string|max:255',
            'tanggal_seminar' => 'required|date',
            'waktu_seminar' => 'required',
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

        $seminars = Seminar::find($id_seminar);

        $filename = $request->input('existing_foto_sampul', $seminars->foto_sampul);
        if ($request->hasFile('foto_sampul')) {
            $file = $request->file('foto_sampul');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/seminar'), $filename);
        }

        // Update the seminar with the validated data
        $seminars->update([
            'nama_seminar' => $request->input('nama_seminar'),
            'tanggal_seminar' => $request->input('tanggal_seminar'),
            'waktu_seminar' => $request->input('waktu_seminar'),
            'deskripsi_singkat' => $request->input('deskripsi_singkat'),
            'deskripsi_lengkap' => $request->input('deskripsi_lengkap'),
            'link' => $request->input('link'),
            'foto_sampul' => $filename,
        ]);

        $uploadedFilePaths = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filename = $file->getClientOriginalName();
                $file->move(public_path('doc/Sertifikat_Seminar'), $filename);
                $path = 'doc/Sertifikat_Seminar/' . $filename;
                $uploadedFilePaths[] = $path;
            }
        }

        // Redirect to the seminar list or any other page with a success message
        return redirect()->route('admin.seminar')->with('success', 'Seminar updated successfully');
    }

    public function delete(Request $request, $id_seminar)
    {
        $seminars = Seminar::find($id_seminar);

        if ($seminars) {
            $seminars->delete();
        }

        return redirect()->route('admin.seminar')->with('success', 'User deleted successfully');
    }

    public function toggleStatus($id_seminar)
    {
        $seminars = Seminar::find($id_seminar);

        if ($seminars) {
            // Toggle the active status
            $seminars->status = $seminars->status ? 0 : 1;
            $seminars->save();
        }

        return redirect()->route('admin.seminar')->with('success', 'User status updated successfully');
    }

    public function participants($id_seminar)
    {
        $seminar = Seminar::findOrFail($id_seminar);
        $participants = PartisipanSeminar::with('user')->where('id_seminar', $id_seminar)->get();
    
        return view('admin/seminarparticipant', compact('seminar', 'participants'));
    }

    public function uploadCertificate(Request $request)
    {
        $participant = PartisipanSeminar::find($request->id_partisipan_seminar);
    
        $path = null;
        if ($request->hasFile('sertifikat')) {
            $file = $request->file('sertifikat');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('doc/Sertifikat_Seminar'), $filename);
            $path = 'Sertifikat_Seminar/' . $filename;
    
            $participant->sertifikat = $path;
            $participant->save();
        }
        return redirect()->back()->with('success', 'Sertifikat uploaded successfully!');
    }

    public function uploadSurat(Request $request)
    {
        $participant = seminar::find($request->id_seminar);
    
        $path = null;
        if ($request->hasFile('surat_undangan')) {
            $file = $request->file('surat_undangan');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('doc/Surat_Undangan'), $filename);
            $path = 'Surat_Undangan/' . $filename;
    
            $participant->surat_undangan = $path;
            $participant->save();
        }
        return redirect()->back()->with('success', 'Surat Undangan Berhasil diupload!');
    }
}
