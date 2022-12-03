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
            'payment' => 'credito',
            // id 1
        ]);

        ShoppingCart::create([
            'user_id' => '11',
            'payment' => 'debito',
            // id 2
        ]);

        ShoppingCart::create([
            'user_id' => '12',
            'payment' => 'dinheiro',
            // id 3
        ]);

        ShoppingCart::create([
            'user_id' => '13',
            'payment' => 'credito',
            // id 4
        ]);
    }
}
