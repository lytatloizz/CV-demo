<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('manufactures')->insert([
            'manu_name' => 'Starbucks'
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Lavazza"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Illy"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Dunkin' Donuts"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Peet's Coffee"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Nespresso"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Folgers"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Tim Hortons"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Caribou Coffee"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Maxwell House"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Trung Nguyên Coffee"
        ]);
        DB::table('manufactures')->insert([
            'manu_name' => "Mountain Thunder Coffee Plantation"
        ]);
    }
}
