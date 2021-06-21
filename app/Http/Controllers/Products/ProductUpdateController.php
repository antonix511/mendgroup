<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductUpdateService;

class ProductUpdateController extends Controller
{
    private $service;

    public function __construct(ProductUpdateService $service)
    {
        $this->service = $service;
    }
}
