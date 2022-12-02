<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'payment',
        'status',
    ];

    public function rules() {
        return [
            // 'client_id' => 'required',
            // 'seller_id' => 'required',
            // 'total_value' => 'required',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
        ];
    }

    public function purchaseOrderItems()
    {
        return $this->hasMany(PurchaseOrderItems::class, 'purchase_order_id', 'id');
    }
}
