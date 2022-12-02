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

    // O carrinho de compras possui os items referente ao id do carrinho de compras
    // este shoppingCart possui o shoppingCartItems dentro da model ShoppingCart
    public function items($id)
    {
        if (!$data = $this->model->with('shoppingCartItems')->find($id)) {
            return response()->json(['error', 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
}
