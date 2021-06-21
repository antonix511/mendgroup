<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductGetService;

class ProductGetController extends Controller
{
    public $service;

    public function __construct(ProductGetService $service)
    {
        $this->service = $service;
    }

    public function index($catalogue)
    {
        $product = $this->service->index($catalogue);
        return json_encode(['product' => $product->toArray()]);
    }
}
