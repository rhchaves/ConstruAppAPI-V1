<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;

    public function __construct(Administrator $administrator, Request $request) {
        $this->model = $administrator;
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

}
