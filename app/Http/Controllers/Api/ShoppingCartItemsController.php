<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\ShoppingCartItems;
use Illuminate\Http\Request;

class ShoppingCartItemsController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;

    public function __construct(ShoppingCartItems $shoppingCartItems, Request $request) {
        $this->model = $shoppingCartItems;
        $this->request = $request;
    }

    public function shoppingCart($id)
    {
        if (!$data = $this->model->with('items')->find($id)) {
            return response()->json(['error', 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
}
