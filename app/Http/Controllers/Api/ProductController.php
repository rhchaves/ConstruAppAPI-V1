<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends MasterApiController
{
    protected $model;
    protected $path = 'products';
    protected $upload = 'image';

    public function __construct(Product $products, Request $request) {
        $this->model = $products;
        $this->request = $request;
        $this->item = $products;
    }

    public function filtro(Request $request)
    {
        $query = Product::query();

        $termos = $request->only('name', 'label', 'mark');

        foreach ($termos as $name => $valor) {
            if ($valor) {
                $query->where($name, 'LIKE', '%' . $valor . '%');
            }
        }

        $produtos = $query->paginate();

        return $produtos;
    }

}
