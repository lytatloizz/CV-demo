<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call([ProtypesSeeder::class]);
        $this->call([ManufacturesSeeder::class]);
        $this->call([BlogSeeder::class]);
        $this->call([ProductsSeeder::class]);
        $this->call([UserSeeder::class]);
    }
}
