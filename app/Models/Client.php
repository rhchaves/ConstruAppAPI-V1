<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'full_name',
        'cpf',
        'phone',
        'street',
        'number',
        'zip',
        'complement',
        'district',
        'city',
        'state',
        'status',
    ];

    public function rules() {
        return [
            'user_id' => 'required',
            'full_name' => 'required|min:3',
            'cpf' => 'required|unique:clients,cpf,'.$this->id.'|min:11',
            'phone' => 'required|unique:clients,phone,'.$this->id.'|min:11',
            'street' => 'required',
            'zip' => 'required|unique:clients,zip,'.$this->id.'|min:8',
            'district' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'cpf.unique' => 'O CPF já existe',
            'phone.unique' => 'O telefone já existe',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function shoppingCart()
    {
        return $this->hasMany(ShoppingCart::class, 'id', 'user_id');
    }
}
