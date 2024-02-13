<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\dataGuru;
use App\Models\dataSantri;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $guru = dataGuru::count();
        $santri = dataSantri::count();
        $kategori = Kategori::count();
        $artikel = Artikel::count();


        return view('template.index', compact('guru', 'santri', 'kategori', 'artikel'));
    }

    public function listSantri(Request $request)
    {
        $kategori = Kategori::findOrFail();
        $santri = dataSantri::where('santri_id', $request->id)->get();
        return view('template.Menu.menuGuru', compact('kategori','santri'));
    }
}
