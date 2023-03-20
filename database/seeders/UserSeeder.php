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
            'user_name' => 'Lý Tất Lợi',
            'user_email' => 'lytatloizz.no1@gmail.com',
            'user_password' => md5('123123'),
            'user_role' => 'admin',
            'user_status' => '0'
        ]);
        DB::table('users')->insert([
            'user_name' => 'Trần Thanh Tuấn',
            'user_email' => 'tranthanhtuan.no1@gmail.com',
            'user_password' => md5('123123'),
            'user_role' => 'user',
            'user_status' => '0'
        ]);
        DB::table('users')->insert([
            'user_name' => 'Thanh Sơn',
            'user_email' => 'lytatloizz.no2@gmail.com',
            'user_password' => md5('123123'),
            'user_role' => 'user',
            'user_status' => '0'
        ]);
    }
}
