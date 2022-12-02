<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;

    public function __construct(Categories $categories, Request $request) {
        $this->model = $categories;
        $this->request = $request;
    }

    public function products($id)
    {
        if (!$data = $this->model->with('categories')->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado', 404]);
        } else {
            return response()->json($data);
        }
    }
}
