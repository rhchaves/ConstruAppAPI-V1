<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\SellerProduct;
use Illuminate\Http\Request;

class SellerProductController extends MasterApiController
{
    protected $model;
    protected $path;
    protected $upload;

    public function __construct(SellerProduct $sellerProduct, Request $request) {
        $this->model = $sellerProduct;
        $this->request = $request;
    }
}
