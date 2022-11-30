<?php

namespace Database\Seeders;

use App\Models\ProductCart;
use Illuminate\Database\Seeder;

class ProductCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCart::query()->create([
            'product_id' => 1,
            'user_id' => 2,
        ]);

        ProductCart::query()->create([
            'product_id' => 2,
            'user_id' => 2,
        ]);
    }
}
