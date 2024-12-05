<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the ProductSeeder to insert product data
        $this->call(ProductSeeder::class);
    }
}
