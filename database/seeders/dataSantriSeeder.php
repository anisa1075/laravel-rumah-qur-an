<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dataSantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('santris')->insert(array(
            array(
                'santri_id' => 1,
                'kategori_id' => 'tahsin',
                'slug' => 'tahsin'
            )
        ));
    }
}
