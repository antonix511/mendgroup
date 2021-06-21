<?php

namespace App\Repository\Product;

use App\Models\Product;

class ProductRepository implements ProductAbstractRepository
{
    public function create(Product $product)
    {
        $product->save();
    }

    public function get($catalogue)
    {
        $product = Product::where('catalogue', $catalogue)->first();
        return $product;
    }

    public function update(Product $product)
    {
        $product->save();
    }

    public function delete(Product $product)
    {
        $product->delete();
        return true;
    }

    public function show()
    {
        $products = Product::all();
        return $products;
    }
}
