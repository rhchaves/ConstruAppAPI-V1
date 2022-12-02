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
    }

}
