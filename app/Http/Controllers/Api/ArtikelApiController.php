<?php

namespace App\Http\Controllers\Api;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Helpers\FormatHelper;
use App\Helpers\MessageHelper;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ArtikelApiController extends Controller
{
    public function index()
    {
        $artikel = Artikel::get()
            ->map(function ($artikel) {
                return FormatHelper::formatResultAuth($artikel);
            });

            $pesan = "Berhasil ambil data Artikel";
            return MessageHelper::resultAuth(true, $pesan, $artikel, 200);
    }

    public function artikelTambah(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'judul' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255'],
            'kategori_id' => ['required', 'string', 'min:6'],
            'img' => ['required'],
        ]);

        if ($validasi->fails()) {
            $valIndex = $validasi->errors()->all();
            // return $this->errorWoe(false, $valIndex(0));
            // helper bisa dipakai dimana mana 
            return MessageHelper::error(false, $valIndex(0));
        }

        $artikel = Artikel::create([
            'judul' => $request->judul,
            'author' => $request->author,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'img' => $request->file('img')->store('img-artikel'),
        ]);

        $detail = FormatHelper::resultUser($artikel->id);

        // bagian ngeluarin output
        $pesan = "Berhasil menambahkan data artikel";
        return MessageHelper::resultAuth(true, $pesan,  $detail, 200);
    }

   
}
