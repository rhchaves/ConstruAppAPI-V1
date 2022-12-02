<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'seller_id',
        'total_value',
    ];

    public function rules() {
        return [
            'client_id' => 'required',
            'seller_id' => 'required',
            'total_value' => 'required',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
        ];
    }
}
