<?php

namespace App\Services\Product;

use App\Models\Product;
use App\Repository\Product\ProductRepository;

class ProductCreateService
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(array $data)
    {
        $product = Product::makeProduct($data);
        $this->repository->create($product);
        return true;
    }
}
