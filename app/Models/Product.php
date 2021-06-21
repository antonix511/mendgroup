<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'catalogue',
        'lot',
        'holes',
        'size',
        'unit_size',
        'brand',
        'origin',
        'observation',
        'image'
    ];

    public function unitSize()
    {
        return $this->belongsTo(UnitSize::class, 'unit_size');
    }

    public function stock()
    {
        return $this->hasMany(Stock::class, 'product_catalogue', 'catalogue');
    }

    public static function makeProduct(array $data)
    {
        $product = new Product();
        $product->name = $data['name'];
        $product->catalogue = $data['catalogue'];
        $product->lot = $data['lot'];
        $product->holes = (isset($data['holes'])) ?  $data['holes'] : 0;
        $product->size = (isset($data['size'])) ? $data['size'] : 0;
        (!isset($data['unit_size'])) ?: $product->unit_size = '';
        $product->brand = $data['brand'];
        $product->origin = $data['origin'];
        $product->observation = isset($data['observation']) ? $data['observation'] : '';
        return $product;
    }
}
