<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;

    public function __construct(ShoppingCart $shoppingCart, Request $request) {
        $this->model = $shoppingCart;
        $this->request = $request;
    }

    public function client($id)
    {
        if (!$data = $this->model->with('client')->find($id)) {
            return response()->json(['error', 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
}
