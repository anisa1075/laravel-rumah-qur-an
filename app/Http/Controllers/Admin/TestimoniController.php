<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
       
        $testimoni = Testimoni::all();
        return view('Admin.Testimoni.testimoni', compact('testimoni'));
    }

    public function formTestimoni()
    {
        $santri = User::where('role', 3)->get();
        $kategori = Kategori::all();
        $testimoni = Testimoni::all();
        return view('Admin.Testimoni.tambahTestimoni', compact('santri','kategori','testimoni')); 
    }

    public function tambahTestimoni(Request $request)
    {
        Testimoni::create([
            'user_id' => $request->user_id,
            'kategori_id' => $request->kategori_id,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('index.testimoni')->with('Create', "Berhasil tambah data Testimoni");
    }

    public function editTestimoni($id)
    {
        $santri = User::where('role', 3)->get();
        $kategori = Kategori::all();
        $testimoni = Testimoni::findOrFail($id);
        return view('Admin.Testimoni.editTestimoni', compact('santri', 'kategori', 'testimoni'));
    }

    public function updateTestimoni(Request $request, $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->user_id = $request->user_id;
        $testimoni->kategori_id = $request->kategori_id;
        $testimoni->deskripsi = $request->deskripsi;

        $testimoni->update();
        return redirect()->route('index.testimoni')->with('Update', "Data $request->user_id Berhasil di update");
    }

    public function deleteTestimoni($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        return redirect()->back()->with('Delete', "Data $testimoni->user_id Berhasil di hapus");
    }

    public function descTestimoni($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('Admin.Testimoni.descTestimoni', compact('testimoni'));
    }
}
