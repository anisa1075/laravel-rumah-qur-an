<?php

namespace App\Http\Controllers\Santri;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class testimoniSantriController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::where('user_id', Auth::user()->id)->get();
        return view('Santri.Testimoni.testimoni', compact('testimoni'));
    }

    public function editTestimoni($id)
    {
        $santri = User::where('role', 3)->get();
        $kategori = Kategori::all();
        $testimoni = Testimoni::findOrFail($id);
        return view('Santri.Testimoni.editTestimoni', compact('santri', 'kategori', 'testimoni'));
    }

    public function updateTestimoni(Request $request, $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->deskripsi = $request->deskripsi;

        $testimoni->update();
        return redirect()->route('santri.index.testimoni')->with('Update', "Data $request->user_id Berhasil di update");
    }

    public function descTestimoni($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('Admin.Testimoni.descTestimoni', compact('testimoni'));
    }

    
}
