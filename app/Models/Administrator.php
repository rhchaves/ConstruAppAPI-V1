<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'full_name',
        'cpf',
        'type_admin',
        'status',
    ];

    public function rules() {
        return [
            // 'user_id' => 'required',
            'full_name' => 'required|min:3',
            'cpf' => 'required|unique:administrators,cpf,'.$this->id.'|min:11',
            'type_admin' => 'required',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'cpf.unique' => 'O CPF já existe',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
