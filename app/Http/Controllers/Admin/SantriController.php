<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SantriController extends Controller
{
    public function index()
    {
        $santri = User::where('role', 3)->get();
        return view('Admin.CrudPeserta.peserta', compact('santri'));
    }

    public function formSantri()
    {
        return view('Admin.CrudPeserta.formPeserta');
    }

    public function tambahSantri(Request $request)
    {
        User::create([
            'nama' => $request->nama,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'role' => 3,
        ]);
        return redirect()->route('index.user.santri')->with('Create', "Data $request->nama berhasil di tambah");
    }

    public function deleteSantri($id)
    {
        $santri = User::findOrFail($id);
        $santri->delete();

        return redirect()->back()->with('Delete', "Data $santri->nama Berhasil di hapus");
    }
}
