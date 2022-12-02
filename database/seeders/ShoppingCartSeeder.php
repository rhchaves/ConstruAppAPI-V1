<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShoppingCart;

class ShoppingCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShoppingCart::create([
            'user_id' => '10',
            'product_id' => '1',
            'quantity_product' => '3',
            'payment' => 'credito',
        ]);

        ShoppingCart::create([
            'user_id' => '11',
            'product_id' => '2',
            'quantity_product' => '2',
            'payment' => 'credito',
        ]);

        ShoppingCart::create([
            'user_id' => '12',
            'product_id' => '3',
            'quantity_product' => '4',
            'payment' => 'credito',
        ]);

        ShoppingCart::create([
            'user_id' => '10',
            'product_id' => '5',
            'quantity_product' => '2',
            'payment' => 'credito',
        ]);

        ShoppingCart::create([
            'user_id' => '10',
            'product_id' => '3',
            'quantity_product' => '5',
            'payment' => 'credito',
        ]);

        ShoppingCart::create([
            'user_id' => '10',
            'product_id' => '6',
            'quantity_product' => '1',
            'payment' => 'credito',
        ]);
    }
}
