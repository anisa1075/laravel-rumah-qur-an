<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\dataGuru;
use App\Models\Kategori;
use App\Models\dataSantri;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontSantriController extends Controller
{
    public function dashsantri()
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        $kategori1 = Kategori::count();
        $guru = dataGuru::count();
        $artikel = Artikel::count();
        $santri = dataSantri::count();
        return Inertia('HomeSantri', compact('artikel', 'kategori', 'kategori1', 'guru', 'artikel', 'santri'));
    }

    public function home()
    {
        return Inertia('HomeSantri1');
    }
}
