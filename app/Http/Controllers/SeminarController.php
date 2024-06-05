<?php

namespace App\Http\Controllers;
use App\Models\Seminar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SeminarController extends Controller
{
    public function index(){
        $seminars = Seminar::select('id_seminar', 'nama_seminar', 'tanggal_awal', 'tanggal_akhir', 'deskripsi_singkat', 'deskripsi_lengkap', 'status')->get();

        return view('admin.seminarTable', compact('seminars'));
    }

    public function seminar(Request $request)
    {
        $search = $request->input('search');
        
        $data = Seminar::select('id_seminar', 'nama_seminar', 'tanggal_awal', 'tanggal_akhir', 'foto_sampul')
            ->when($search, function ($query, $search) {
                return $query->where('nama_seminar', 'like', '%' . $search . '%');
            })
            ->paginate(8);

        $title = "Seminar"; // Set the title

        return view('seminar', compact('data', 'title'));
    }

    public function detailseminar($id) {
        Carbon::setLocale('id');
        
        $data = Seminar::where('id_seminar', $id)->first();

        $title = $data->nama_seminar;
        $data->tanggal_awal = Carbon::parse($data->tanggal_awal)->format('d F Y');
        $data->tanggal_akhir = Carbon::parse($data->tanggal_akhir)->format('d F Y');

        return view('detailseminar', compact('data', 'title'));
    }

    public function create(){
        return view('admin.formSeminar');
    }

    public function store(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'nama_seminar' => 'required|string|max:255',
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

        $filename = null;
        if ($request->hasFile('foto_sampul')) {
            $file = $request->file('foto_sampul');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/seminar'), $filename);
        }
    
        // Create a new seminar with the validated data and set status to 1
        $seminar = new Seminar([
            'nama_seminar' => $request->input('nama_seminar'),
            'tanggal_awal' => $request->input('tanggal_awal'),
            'tanggal_akhir' => $request->input('tanggal_akhir'),
            'deskripsi_singkat' => $request->input('deskripsi_singkat'),
            'deskripsi_lengkap' => $request->input('deskripsi_lengkap'),
            'foto_sampul' => $filename,
            'status' => 1, // Set status to 1
        ]);
    
        // Save the seminar to the database
        $seminar->save();
    
        // Redirect to the seminar list or any other page with a success message
        return redirect()->route('admin.seminar')->with('success', 'Seminar created successfully');
    }
    

    public function delete(Request $request, $id_seminar) {
        $seminars = Seminar::find($id_seminar);
        
        if ($seminars) {
            $seminars->delete();
        }
        
        return redirect()->route('admin.seminar')->with('success', 'User deleted successfully');
    }

    public function toggleStatus($id_seminar) {
        $seminars = Seminar::find($id_seminar);

        if ($seminars) {
            // Toggle the active status
            $seminars->status = $seminars->status ? 0 : 1;
            $seminars->save();
        }

        return redirect()->route('admin.seminar')->with('success', 'User status updated successfully');
    }
}
