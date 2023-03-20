<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'customer_name' => 'Nguyễn Văn A',
            'customer_email' => 'lytatloizz.no1@gmail.com',
            'customer_password' => md5('123321'),
            'customer_status' => '0'
        ]);
        DB::table('customers')->insert([
            'customer_name' => 'Lê Thị B',
            'customer_email' => 'lytatloizz.no2@gmail.com',
            'customer_password' => md5('123321'),
            'customer_status' => '0'
        ]);
    }
}
