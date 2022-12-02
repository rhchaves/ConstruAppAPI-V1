<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchase_order_id',
        'product_id',
        'product_value',
        'quantity',
        'subtotal_value',
    ];

    public function rules() {
        return [
            'purchase_order_id' => 'required',
            'product_id' => 'required',
            'product_value' => 'required',
            'quantity' => 'required',
            'subtotal_value' => 'required',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
        ];
    }

    public function purchaseOrderItems()
    {
        return $this->belongsTo(PurchaseOrder::class, 'purchase_order_items_id', 'id');
    }
}
