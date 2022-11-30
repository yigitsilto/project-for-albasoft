<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->create([
            'name' => 'Product 1',
            'slug' => 'product-1',
            'description' => 'Product Description 1',
            'category_id' => 1,
        ]);

        Product::query()->create([
            'name' => 'Product 2',
            'slug' => 'product-2',
            'description' => 'Product Description 2',
            'category_id' => 2,
        ]);


    }
}
