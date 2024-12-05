<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Import the Product model

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Inserting sample data
        Product::create([
            'name' => 'kitkat',
            'price' => 19.99,
        ]);
        
        Product::create([
            'name' => 'dairy milk',
            'price' => 29.99,
        ]);
        
        Product::create([
            'name' => 'Pulse',
            'price' => 39.99,
        ]);
        
        Product::create([
            'name' => 'chokber',
            'price' => 49.99,
        ]);
        
        Product::create([
            'name' => 'vanilla',
            'price' => 59.99,
        ]);
    }
}
