<?php

namespace App\Repository\Product;

use App\Models\Product;

interface ProductAbstractRepository
{
    public function get($catalogue);
    public function show();
    public function update(Product $product);
    public function delete(Product $product);
    public function create(Product $product);
}
