<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dataGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gurus')->insert(array(
            array(
                'guru_id' => 'anisa',
                'kategori_id' => 'tahsin',
                'slug' => 'tahsin'
            )
        ));
    }
}
