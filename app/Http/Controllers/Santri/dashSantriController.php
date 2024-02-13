<?php

namespace App\Http\Controllers\Santri;

use App\Models\User;
use App\Models\Artikel;
use App\Models\dataGuru;
use App\Models\Testimoni;
use App\Models\Transaksi;
use App\Models\dataSantri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class dashSantriController extends Controller
{
    public function index()
    {
        $artikel = Artikel::count();
        return view('Santri.index', compact('artikel'));
    }

    public function artikel()
    {
        $artikel = Artikel::all();
        return view('Santri.artikel', compact('artikel'));
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
        return view('Santri.artikel', compact('artikel'));
    }

    public function transaksi()
    {
        $transaksi = Transaksi::where('santri_id', Auth::user()->id)->get();
        return view('Santri.transaksiPeserta', compact('transaksi'));
    }

    public function listGuru()
    {
        $guru = dataGuru::all();
        return view('Santri.listGuru', compact('guru'));
    }

    public function profileSantri()
    {
        $id = Auth()->user()->id;
        $dataSantri = dataSantri::where('santri_id', $id)->first();
        return view('Santri.profileSantri', compact('dataSantri'));
    }

    public function updateSantri(Request $request, $id)
    {
        $santri = dataSantri::findOrFail($id);
        $santri->umur = $request->umur;
        $santri->alamat = $request->alamat;
        $santri->jenis_kelamin = $request->jenis_kelamin;
        $santri->notelp = $request->notelp;
        $santri->ttl = $request->ttl;

        $santri->update();

        return redirect()->route('santri.profile.santri')->with('Update', "Data Santri Berhasil di update");
    }
}
