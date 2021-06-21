<?php

namespace App\Services\Product;

use App\Repository\Product\ProductRepository;

class ProductGetService
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($catalogue)
    {
        $product = $this->repository->get($catalogue);
        return $product;
    }
}
