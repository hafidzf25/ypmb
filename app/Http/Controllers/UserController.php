<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        
        // Mengambil hanya kolom id, name, dan email
        $users = User::select('id', 'name', 'email', 'instansi', 'active', 'foto')->get();

        // Mengirim data ke view
        return view('admin.userTable', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('editprofil', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->instansi = $request->input('instansi');

        if ($request->hasFile('foto')) {
            if ($user->foto && Storage::exists('images/' . $user->foto)) {
                Storage::delete('images/' . $user->foto); 
            }

            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = 'images/' . $filename;
            $user->foto = $path;
        }

        $user->save();

        return redirect()->route('editprofil', ['id' => $user->id])->with('success', 'Profile updated successfully.');
    }

    public function delete(Request $request, $id) {
        $user = User::find($id);
        
        if ($user) {
            $user->delete();
        }
        
        return redirect()->route('admin.user')->with('success', 'User deleted successfully');
    }

    public function toggleStatus($id) {
        $user = User::find($id);

        if ($user) {
            // Toggle the active status
            $user->active = $user->active ? 0 : 1;
            $user->save();
        }

        return redirect()->route('admin.user')->with('success', 'User status updated successfully');
    }
    
}
