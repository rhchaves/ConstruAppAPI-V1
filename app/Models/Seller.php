<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'fantasyName',
        'cnpj',
        'phone',
        'street',
        'number',
        'zip',
        'complement',
        'district',
        'city',
        'state',
        'status',
        // 'deliveryDistance',
        'created_at',
        'updated_at',
    ];

    public function rules() {
        return [
            'user_id' => 'required',
            'fantasyName' => 'required|unique:sellers,fantasyName,'.$this->id.'|min:3',
            'cnpj' => 'required|unique:sellers,cnpj,'.$this->id.'|min:14',
            'phone' => 'required|unique:sellers,phone,'.$this->id.'|min:11',
            'street' => 'required',
            'number' => 'required',
            'zip' => 'required|unique:sellers,zip,'.$this->id.'|min:8',
            'district' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'cnpj.unique' => 'O CNPJ já existe',
            'phone.unique' => 'O telefone já existe',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
