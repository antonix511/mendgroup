<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Product\ProductCreateService;

class ProductCreateController extends Controller
{
    public $service;

    public function __construct(ProductCreateService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $data = $this->getData($request);
        $result = $this->service->index($data);
        return json_encode(['result' => $result]);
    }
}
