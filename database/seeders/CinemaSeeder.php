<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cinema')->insert([
            'cinema name' => 'PVR Cinemas (Phoenix Market City Mall)',
            'place' => 'Pune',
        ]);

        DB::table('cinema')->insert([
            'cinema name' => 'Cinepolis Cinemas (Imperial Square Mall)',
            'place' => 'Surat',
        ]);
    }
}
