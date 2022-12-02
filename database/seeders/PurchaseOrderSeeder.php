<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PurchaseOrder;

class PurchaseOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PurchaseOrder::create([
            'user_id' => '10',
            'payment' => 'credito',
            // 'total_value' => 123,
            // id 1
        ]);

        PurchaseOrder::create([
            'user_id' => '11',
            'payment' => 'debito',
            // 'total_value' => 123,
            // id 2
        ]);

        PurchaseOrder::create([
            'user_id' => '12',
            'payment' => 'dinheiro',
            // 'total_value' => 123,
            // id 3
        ]);
    }
}
