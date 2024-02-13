<?php

namespace App\Http\Controllers\Guru;

use App\Models\User;
use App\Models\dataGuru;
use App\Models\Kategori;
use App\Models\dataSantri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class dashGuruController extends Controller
{
    public function index()
    {
        $santri = dataSantri::where('guru_id', Auth::user()->id)->get()->count();
        $kategori = Kategori::count();
        return view('Guru.index', compact('santri', 'kategori'));
    }

    public function kategori()
    {
        $kategori = Kategori::all();
        return view('Guru.kategori', compact('kategori'));
    }

    public function listSantri()
    {
        
        $santri = dataSantri::where('guru_id', Auth::user()->id)->get();
        return view('Guru.listSantri', compact('santri'));
    }

    public function profileGuru()
    {
        $id = Auth()->user()->id;
        // $guru = User::where('id', $id)->first();
        $guru = dataGuru::where('guru_id', $id)->first();
        return view('Guru.profileGuru', compact('guru'));
    }

    public function editGuru($id)
    {
        $guru = dataGuru::findOrFail($id);
        return view('Guru.editProfileGuru', compact('guru'));
    }

    public function updateGuru(Request $request, $id)
    {
        $guru = dataGuru::findOrFail($id);


        // cara pertama atau cara praktis
        if ($request->hasFile('image')) {
            // upload img baru
            $img = $request->file('img');
            $img->storeAs('public/images' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/images/' . $guru->img);

            // update dengan gambar baru
            $guru->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $guru->guru->nama = $request->guru->nama;
            $guru->guru->email = $request->guru->email;
            $guru->img = $request->file('img')->store('img-guru');
        }

        // menyimpan data perubahan
        $guru->update();

        return redirect()->route('guru.profile.guru')->with('Update', "Data $request->judul Berhasil di Update");
    }

    
}
