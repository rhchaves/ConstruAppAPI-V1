<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseOrderController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;

    public function __construct(PurchaseOrder $purchaseOrder, Request $request) {
        $this->model = $purchaseOrder;
        $this->request = $request;
    }

    public function items($id)
    {
        if (!$data = $this->model->with('purchaseOrderItems')->find($id)) {
            return response()->json(['error', 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
}
