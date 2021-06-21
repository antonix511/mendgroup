<?php

namespace App\Services\Product;

use App\Repository\Product\ProductRepository;

class ProductUpdateService
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($catalogue, array $data)
    {
        $product = $this->repository->get($catalogue);
        // pendiente
    }
}
