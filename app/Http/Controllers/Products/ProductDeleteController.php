<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductDeleteService;

class ProductDeleteController extends Controller
{
    public $service;

    public function __construct(ProductDeleteService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request, $catalogue)
    {
        $result = $this->service->index($catalogue);
        return json_encode(['result' => $result]);
    }
}
