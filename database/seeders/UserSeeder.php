<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'jd@mail.com',
            'password' => bcrypt('123456'),
            'status' => 'Active',
        ]);

        DB::table('users')->insert([
            'name' => 'Nikhil Waghchaude',
            'email' => 'nw@mail.com',
            'password' => bcrypt('123456'),
            'status' => 'Active',
        ]);

        DB::table('users')->insert([
            'name' => 'ABC XYZ',
            'email' => 'ax@mail.com',
            'password' => bcrypt('123456'),
            'status' => 'NotActive',
        ]);
    }
}
