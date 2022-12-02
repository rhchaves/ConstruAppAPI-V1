<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'sku_id',
        'category_id',
        // 'category',
        'name',
        'label',
        'description',
        'price',
        'product_mark',
        'image',
        'status',
        // 'created_by',
        // 'updated_by',
    ];

    public function rules() {
        return [
            // 'sku_id' => 'required|unique:products,sku_id,'.$this->id.'|min:3',
            // 'category_id' => 'required',
            // 'category' => 'required|min:3',
            // 'created_by' => 'required',
            // 'updated_by' => 'required',
            'name' => 'required|unique:products,name,'.$this->id.'|min:3',
            'label' => 'required|unique:products,label,'.$this->id.'|min:3',
            'description' => 'required|min:3',
            'price' => 'required',
            'product_mark' => 'required|min:3',
            // 'image' => 'file|mimes:png,jpg,jpeg',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'name.unique' => 'O nome do produto já existe',
            'label.unique' => 'O label do produto já existe',
            // 'image.mimes' => 'O arquivo deve ser uma imagem do tipo: png, jpg ou jpeg',
            'name.min' => 'O nome deve ter no mínimo 3 caracteres',
            'label.min' => 'O label deve ter no mínimo 3 caracteres',
            'description.min' => 'O description deve ter no mínimo 3 caracteres',
            'product_mark.min' => 'O product_mark deve ter no mínimo 3 caracteres',
            // 'category.min' => 'O category deve ter no mínimo 3 caracteres',
        ];
    }

    public function fileType($id)
    {
        $data = $this->find($id);
        return $data->image;
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
