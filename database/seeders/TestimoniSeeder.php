<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonis')->insert(array(
            array(
                'user_id' => 'anisa',
                'kategori_id'=> 'tahsin',
                'deskripsi'=> 'Kelas tahsinnya menyenangkan',
            )
            ));
    }
}
