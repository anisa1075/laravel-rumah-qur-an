<?php

namespace App\Helpers;

use App\Models\Artikel;
use Carbon\Carbon;

class FormatHelper{

    public static function formatResultAuth($detail){
        return [
            'id' => $detail->id,
            'judul' => $detail->judul,
            'author' => $detail->author,
            'deskripsi' => $detail->deskripsi,
            'kategori_id' => $detail->kategori_id,
            'img' => $detail->img,
            'tanggal_tambah' => Carbon::parse($detail->created_at)->translatedFormat('d F Y'),
        ];
    }

    public static function resultUser($id)
    {
        $artikel = Artikel::where('id', $id)
            ->get()
            ->map(function ($artikel) {
                return FormatHelper::formatResultAuth($artikel);
            });

            return $artikel;
    }
}