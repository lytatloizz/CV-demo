<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProtypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('protypes')->insert([
            'type_name' => 'Đồ uống nóng'
        ]);
        DB::table('protypes')->insert([
            'type_name' => 'Hạt'
        ]);
        DB::table('protypes')->insert([
            'type_name' => 'Đồ uống lạnh'
        ]);
    }
}
