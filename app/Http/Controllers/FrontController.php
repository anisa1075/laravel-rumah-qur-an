<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Artikel;
use App\Models\dataGuru;
use App\Models\Kategori;
use App\Models\Testimoni;
use App\Models\Transaksi;
use App\Models\dataSantri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index() {
        $kategori = Kategori::all();
        $kategori1 = Kategori::count();
        $guru = dataGuru::count();
        $artikel = Artikel::count();
        $santri = dataSantri::count();
        
        return Inertia('Home', compact('kategori', 'kategori1', 'guru', 'artikel', 'santri'));
    }

    


    public function guru()
    {

        $guru = dataGuru::with('guru', 'kategori')->get();
        $kategori = Kategori::all();
        return Inertia('Guru', compact('guru', 'kategori'));
    }

    public function santri()
    {
        $santri = dataSantri::with('santri', 'kategori')->get();
        $kategori = Kategori::all();
        return Inertia('Santri', compact('santri', 'kategori'));
    }

    public function artikel()
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        return Inertia('Artikel', compact('artikel', 'kategori'));
    }

    public function detailArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        return Inertia('DescArtikel', compact('artikel', 'kategori'));
    }

    public function searchArtikel(Request $request)
    {
        $query = $request->input('query');

        $artikel = Artikel::where('judul', 'LIKE', '%' . $query . '%')->get();

        return Inertia('Artikel', compact('artikel'));
    }

    public function detailProgram($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori1 = Kategori::all();
        return Inertia('Program', compact('kategori', 'kategori1'));
    }

    public function transaksiProgram(Request $request)
    {
        $brand = 'RQQ';
        $karakter_kode = '0123456789';
        $acak = str_shuffle($karakter_kode);
        $kode_transaksi = substr($acak,0,12);
        $kode_fix = $brand.'-'.$kode_transaksi;

        Transaksi::create([
            'santri_id' => $request->santri_id,
            'kode_transaksi' => $kode_fix,
            'nama' => $request->nama,
            'email' => $request->email,
            'rekening' => $request->rekening,
            'total_harga' => $request->total_harga,
        ]);
    }

    public function daftarProgram($id)
    {
        $kategori = Kategori::findOrFail($id);
        return Inertia('FormProgram', compact('kategori'));
    }

    public function testimoni()
    {
        $testimoni = Testimoni::with('santri', 'kategori')->get();
        $kategori = Kategori::all();
        return Inertia('Testimoni', compact('testimoni', 'kategori'));
    }

    public function dashguru()
    {
        return Inertia('HomeLogin');
    }

    // dashboard santri

    public function homeSantri()
    {   $kategori = Kategori::all();
        $kategori1 = Kategori::count();
        $guru = dataGuru::count();
        $artikel = Artikel::count();
        $santri = dataSantri::count();
        $user = User::all();
        return Inertia('HomeSantri1', compact('kategori', 'kategori1', 'guru', 'artikel', 'santri', 'user'));
    }

    public function guruSantri()
    {
        $guru = dataGuru::with('guru', 'kategori')->get();
        $kategori = Kategori::all();
        return Inertia('GuruSantri', compact('guru', 'kategori'));
    }

    public function santriSantri()
    {
        $santri = dataSantri::with('santri', 'kategori')->get();
        $kategori = Kategori::all();
        return Inertia('SantriSantri', compact('santri', 'kategori'));
    }

    public function testimoniSantri()
    {
        $testimoni = Testimoni::with('santri', 'kategori')->get();
        $kategori = Kategori::all();
        return Inertia('TestimoniSantri', compact('testimoni', 'kategori'));
    }

    public function artikelSantri()
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        return Inertia('ArtikelSantri', compact('artikel', 'kategori'));
    }

    public function descArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        return Inertia('DescArtikelSantri', compact('artikel', 'kategori'));
    }

    public function programSantri($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori1 = Kategori::all();
        return Inertia('ProgramSantri', compact('kategori', 'kategori1'));
    }

    public function daftarSantri($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori1 = Kategori::all();
        return Inertia('FormProgram2', compact('kategori', 'kategori1'));
    }
    // end dashboard santri

    

   
    
}
