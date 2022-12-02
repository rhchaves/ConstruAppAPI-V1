<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;

    public function __construct(Client $client, Request $request) {
        $this->model = $client;
        $this->request = $request;
    }

    public function user($id)
    {
        if (!$data = $this->model->with('user')->find($id)) {
            return response()->json(['error', 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }

    public function shoppingCart($id)
    {
        if (!$data = $this->model->with('shoppingCart')->find($id)) {
            return response()->json(['error', 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
}
