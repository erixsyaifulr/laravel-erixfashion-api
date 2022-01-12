<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Baju Uniqlo',
                'type' => 'cotton',
                'description' => 'Ini adalah baju yang terbuat dari kain yang halus dan tebal',
                'price' => 200000,
                'slug' => 'baju-uniqlo',
                'quantity' => 5,
            ],
            [
                'name' => 'Celana Uniqlo',
                'type' => 'cotton',
                'description' => 'Ini adalah celana yang sangat nyaman dipakai',
                'price' => 120000,
                'slug' => 'celana-uniqlo',
                'quantity' => 5,
            ],
        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
