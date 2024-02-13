<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('Admin.Kategori.kategori', compact('kategori'));
    }

    public function formKategori()
    {
        $guru = User::where('role', 2)->get();
        return view('Admin.Kategori.tambahKategori', compact('guru'));
    }

    public function tambahKategori(Request $request)
    {
        // dd($request->all());

        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'guru_id' => $request->guru_id,
            'slug' => Str::slug($request->nama_kategori)
        ]);
        return redirect()->route('index.kategori')->with('Create', "Data $request->nama_kategori Berhasil ditambahkan");
    }

    public function editKategori($id)
    {
        $guru = User::where('role', 2)->get();
        $kategori = Kategori::findOrFail($id);
        return view('Admin.Kategori.editKategori', compact('kategori', 'guru'));
    }

    public function updateKategori(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->harga = $request->harga;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->guru_id = $request->guru_id;
        $kategori->slug = Str::slug($request->nama_kategori);

        $kategori->update();

        return redirect()->route('index.kategori')->with('Update', "Data $request->nama_kategori Berhasil di update");

    }

    public function deleteKategori($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->back()->with('Delete', "Data $kategori->nama_kategori Berhasil di hapus");
    }

    public function descKategori($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('Admin.Kategori.descKategori', compact('kategori'));
    }

    public function searchKategori(Request $request){
        if($request->has('search')){
            $kategori = Kategori::where('nama_kategori', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $kategori = Kategori::all();
        }
        return view('Admin.Kategori.kategori', compact('kategori'));
    }
}
