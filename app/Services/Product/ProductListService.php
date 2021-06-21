<?php

namespace App\Services\Product;

use App\Repository\Product\ProductRepository;

class ProductListService
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $products = $this->repository->show();
        return $products->toArray();
    }
}
