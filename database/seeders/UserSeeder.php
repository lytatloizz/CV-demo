<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'user_name' => 'Lý Tất Lợi',
            'user_email' => 'lytatloizz.no1@gmail.com',
            'password' => Hash::make('123123'),
            'user_role' => '0',
            'user_status' => '0'
        ]);
        DB::table('users')->insert([
            'user_name' => 'Trần Thanh Tuấn',
            'user_email' => 'tranthanhtuan.no1@gmail.com',
            'password' => Hash::make('123123'),
            'user_role' => '1',
            'user_status' => '0'
        ]);
        DB::table('users')->insert([
            'user_name' => 'Thanh Sơn',
            'user_email' => 'lytatloizz.no2@gmail.com',
            'password' => Hash::make('123123'),
            'user_role' => '1',
            'user_status' => '0'
        ]);
    }
}
