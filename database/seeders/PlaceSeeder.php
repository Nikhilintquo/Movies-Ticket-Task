<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('place')->insert([
            'name' => 'Pune',
            'status' => 'available',
        ]);

        DB::table('place')->insert([
            'name' => 'Surat',
            'status' => 'available',
        ]);

        DB::table('place')->insert([
            'name' => 'Surat',
            'status' => 'notavailable',
        ]);
    }
}
