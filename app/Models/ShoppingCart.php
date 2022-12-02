<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        // 'product_id',
        // 'quantity_product',
        'payment',
        'status',
    ];

    public function rules() {
        return [
            'user_id' => 'required',
            'payment' => 'required',
            // 'quantity_product' => 'required',
            // 'product_id' => 'required|unique:shopping_carts,product_id,',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            // 'product_id.unique' => 'O product_id já existe',
        ];
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'user_id', 'id');
    }

    public function shoppingCartItems()
    {
        return $this->hasMany(ShoppingCartItems::class, 'shopping_cart_id', 'id');
    }
}
