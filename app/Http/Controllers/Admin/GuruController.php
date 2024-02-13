<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index()
    {
        $guru = User::where('role', 2)->get();
        return view('Admin.CrudGuru.guru', compact('guru'));
    }

    public function formGuru()
    {
        return view('Admin.CrudGuru.formGuru');
    }

    public function tambahGuru(Request $request)
    {
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 2,
        ]);

        return redirect()->route('index.user.guru')->with('Create', "Data $request->nama berhasil di tambahkan");
    }

    public function deleteGuru($id)
    {
        $guru = User::findOrFail($id);
        $guru->delete();

        return redirect()->back()->with('Delete', "Data $guru->nama Berhasil di hapus");
    }
}
