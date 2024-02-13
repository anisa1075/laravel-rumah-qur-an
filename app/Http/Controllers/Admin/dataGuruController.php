<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\dataGuru;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class dataGuruController extends Controller
{
    public function index()
    {
        $guru = dataGuru::all();
        return view('Admin.Guru.guru', compact('guru'));
    }

    public function formGuru()
    {
        $guru = User::where('role', 2)->get();
        $kategori = Kategori::all();

        return view('Admin.Guru.tambahGuru', compact('guru','kategori'));
    }

    public function tambahGuru(Request $request)
    {
        dataGuru::create([
            'img' => $request->file('img')->store('img-guru'),
            'guru_id' => $request->guru_id,
            'kategori_id' => $request->kategori_id,
            'slug' => Str::slug($request->guru_id),
        ]);

        return redirect()->route('index.guru')->with('Create', "Data $request->guru_id Berhasil ditambahkan");
    }

    public function editGuru($id)
    {
        $guru = User::where('role', 2)->get();
        $kategori = Kategori::all();
        $dataGuru = dataGuru::findOrFail($id);
        

        return view('Admin.Guru.editGuru', compact('guru', 'kategori', 'dataGuru'));
    }

    public function updateGuru(Request $request, $id)
    {
        $guru = dataGuru::findOrFail($id);


        // cara pertama atau cara praktis
        if ($request->hasFile('img/storage/')) {
            // upload img baru
            $img = $request->file('img/storage/');
            $img->storeAs('public/img/storage/' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/imgs/storage/' . $guru->img);

            // update dengan gambar baru
            $guru->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $guru->guru_id = $request->guru_id;
            $guru->kategori_id = $request->kategori_id;
            $guru->img = $request->file('img')->store('img-guru');
        }

        // menyimpan data perubahan
        $guru->update();

        return redirect()->route('index.guru')->with('Update', "Data $request->guru_id Berhasil di Update");
    }

    public function deleteGuru($id)
    {
        $guru = dataGuru::findOrFail($id);
        Storage::delete($guru->img);
        $guru->delete();

        return redirect()->back()->with('Delete', "Data $guru->guru_id Berhasil di hapus");
    }
}
