<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Kategori;
use App\Models\dataSantri;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class dataSantriController extends Controller
{
    public function index()
    {
        $santri = dataSantri::all();
        return view('Admin.Santri.santri', compact('santri'));
    }

    public function formSantri()
    {
        $santri = User::where('role', 3)->get();
        $kategori = Kategori::all();
        $guru = User::where('role', 2)->get();

        return view('Admin.Santri.tambahSantri', compact('santri', 'kategori','guru'));
    }

    public function tambahSantri(Request $request)
    {
        dataSantri::create([
            'img' => $request->file('img')->store('img-santri'),
            'santri_id' => $request->santri_id,
            'kategori_id' => $request->kategori_id,
            'guru_id' => $request->guru_id,
            'slug' => Str::slug($request->santri_id),
        ]);

        return redirect()->route('index.kelas')->with('Create', "Data $request->santri_id Berhasil ditambahkan");
    }

    public function editSantri($id)
    {
        $santri = User::where('role', 3)->get();
        $kategori = Kategori::all();
        $dataSantri = dataSantri::findOrFail($id);
        $guru = User::where('role', 2)->get();

        return view('Admin.Santri.editSantri', compact('santri', 'kategori', 'dataSantri', 'guru'));
    }

    public function updateSantri(Request $request, $id)
    {
        $santri = dataSantri::findOrFail($id);
        // cara pertama atau cara praktis
        if ($request->hasFile('img/storage/')) {
            // upload img baru
            $img = $request->file('img/storage/');
            $img->storeAs('public/img/storage/' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/imgs/storage/' . $santri->img);

            // update dengan gambar baru
            $santri->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $santri->santri_id = $request->santri_id;
            $santri->kategori_id = $request->kategori_id;
            $santri->img = $request->file('img')->store('img-santri');
        }

        // menyimpan data perubahan
        $santri->update();

        return redirect()->route('index.kelas')->with('Update', "Data $request->santri_id Berhasil di Update");
    }

    public function deleteSantri($id)
    {
        $santri = dataSantri::findOrFail($id);
        Storage::delete($santri->img);
        $santri->delete();

        return redirect()->back()->with('Delete', "Data $santri->santri_id Berhasil di hapus");
    }

    public function searchSantri(Request $request)
    {
        if($request->has('search')){
            $santri = User::where('nama', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $santri = User::all();
        }
        return view('Admin.Santri.santri', compact('santri'));
    }
}
