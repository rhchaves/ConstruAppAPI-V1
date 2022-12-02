<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PurchaseOrderItems;

class PurchaseOrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PurchaseOrderItems::create([
            'purchase_order_id' => 1,
            'product_id' => 1,
            'product_value' => '3',
            'quantity' => 1,
            'subtotal_value' => 12,
        ]);

        PurchaseOrderItems::create([
            'purchase_order_id' => 1,
            'product_id' => 2,
            'product_value' => '3',
            'quantity' => 2,
            'subtotal_value' => 12,
        ]);

        PurchaseOrderItems::create([
            'purchase_order_id' => 2,
            'product_id' => 3,
            'product_value' => '3',
            'quantity' => 3,
            'subtotal_value' => 12,
        ]);

        PurchaseOrderItems::create([
            'purchase_order_id' => 2,
            'product_id' => 4,
            'product_value' => '3',
            'quantity' => 4,
            'subtotal_value' => 12,
        ]);

        PurchaseOrderItems::create([
            'purchase_order_id' => 2,
            'product_id' => 5,
            'product_value' => '3',
            'quantity' => 5,
            'subtotal_value' => 12,
        ]);

        PurchaseOrderItems::create([
            'purchase_order_id' => 3,
            'product_id' => 6,
            'product_value' => '3',
            'quantity' => 6,
            'subtotal_value' => 12,
        ]);

        PurchaseOrderItems::create([
            'purchase_order_id' => 3,
            'product_id' => 7,
            'product_value' => '3',
            'quantity' => 7,
            'subtotal_value' => 12,
        ]);

        PurchaseOrderItems::create([
            'purchase_order_id' => 3,
            'product_id' => 8,
            'product_value' => '3',
            'quantity' => 8,
            'subtotal_value' => 12,
        ]);

        PurchaseOrderItems::create([
            'purchase_order_id' => 3,
            'product_id' => 9,
            'product_value' => '3',
            'quantity' => 9,
            'subtotal_value' => 12,
        ]);
    }
}
