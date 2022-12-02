<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCartItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'shopping_cart_id',
        'product_id',
        // 'product_value',
        'quantity',
        'subtotal_value',
    ];

    public function items()
    {
        return $this->belongsTo(ShoppingCart::class, 'shopping_cart_id', 'id');
    }
}
