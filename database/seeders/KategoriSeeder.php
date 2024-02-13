<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert(array(
            array(
                'nama_kategori' => 'Quran',
                'deskripsi'=> 'Belajar Quran',
                'harga'=> 'Seikhlasnya',
                'slug'=> 'quran',
            )
        ));
    }
}
