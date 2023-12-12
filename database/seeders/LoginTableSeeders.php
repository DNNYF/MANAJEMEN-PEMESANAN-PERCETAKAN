<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Illuminate\Support\facades\Hash;


class LoginTableseeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('login')->insert([
            'email'=>'y@gmail.com',
            'password'=>Hash::make(123456)
        ]);
    }
}
