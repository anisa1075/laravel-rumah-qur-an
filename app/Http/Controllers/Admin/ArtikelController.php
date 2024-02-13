<?php

namespace App\Http\Controllers\Admin;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('Admin.Artikel.artikel', compact('artikel'));
    }

    public function formArtikel()
    {
        $kategori = Kategori::all();
        return view('Admin.Artikel.tambahArtikel', compact('kategori'));
    }

    public function tambahArtikel(Request $request)
    {
        Artikel::create([
            'img' => $request->file('img')->store('img-artikel'),
            'judul' => $request->judul,
            'author' => $request->author,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'slug' => Str::slug($request->judul)
        ]);

        return redirect()->route('index.artikel')->with('Create', "Data $request->judul Berhasil ditambahkan");
    }

    public function editArtikel($id)
    {
        $kategori = Kategori::all();
        $artikel = Artikel::findOrFail($id);

        return view('Admin.Artikel.editArtikel', compact('kategori', 'artikel'));
    }

    public function updateArtikel(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);


        // cara pertama atau cara praktis
        if ($request->hasFile('image')) {
            // upload img baru
            $img = $request->file('img');
            $img->storeAs('public/images' . $img->hashName());

            // Hapus foto lama
            Storage::delete('public/images/' . $artikel->img);

            // update dengan gambar baru
            $artikel->update([
                'img' => $img->hashName(),
            ]);
        } else {
            // kalau misal nggk up foto, tetap update data yang lain
            $artikel->judul = $request->judul;
            $artikel->author = $request->author;
            $artikel->deskripsi = $request->deskripsi;
            $artikel->kategori_id = $request->kategori_id;
            $artikel->img = $request->file('img')->store('img-artikel');
            $artikel->slug = Str::slug($request->judul);
        }

        // menyimpan data perubahan
        $artikel->update();

        return redirect()->route('index.artikel')->with('Update', "Data $request->judul Berhasil di Update");
    }

    public function deleteArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->back()->with('Delete', "Data $artikel->judul Berhasil di Hapus");
    }

    public function descArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('Admin.Artikel.descArtikel', compact('artikel'));
    }

    public function searchArtikel(Request $request)
    {
        if($request->has('search')){
            $artikel = Artikel::where('judul', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $artikel = Artikel::all();
        }
        return view('Admin.Artikel.artikel', compact('artikel'));
    }
}
