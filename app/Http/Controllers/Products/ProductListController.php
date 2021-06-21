<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductListService;

class ProductListController extends Controller
{
    private $service;

    public function __construct(ProductListService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $listProduct = $this->service->index();
        return json_encode(['products' => $listProduct]);
    }
}
