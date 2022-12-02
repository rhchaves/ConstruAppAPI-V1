<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;

    public function __construct(User $user, Request $request)
    {
        $this->model = $user;
        $this->request = $request;
    }

    public function administrator($id)
    {
        if (!$data = $this->model->with('administrator')->find($id)) {
            return response()->json(['error', 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }

    public function seller($id)
    {
        if (!$data = $this->model->with('seller')->find($id)) {
            return response()->json(['error', 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
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
