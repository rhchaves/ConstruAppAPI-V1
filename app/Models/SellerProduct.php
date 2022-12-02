<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'seller_id',
        'product_id',
    ];

    public function rules() {
        return [
            'seller_id' => 'required',
            'product_id' => 'required',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
        ];
    }
}
