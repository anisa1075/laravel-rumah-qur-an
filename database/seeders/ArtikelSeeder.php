<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artikels')->insert(array(
            array(
                'judul' => 'Motivasi Menghafal',
                'author' => 'Annisa',
                'deskripsi'=> 'Menghafal itu mudah',
                'kategori_id'=> 1,
                'slug'=> 'motivasi-menghafal',
            )
        ));
    }
}
