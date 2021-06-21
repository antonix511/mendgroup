<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_catalogue',
        'quantity'
    ];

    public static function makeStock(array $data)
    {
        $stock = new Stock();
        $stock->product_catalogue = $data['product_catalogue'];
        $stock->quantity = $data['quantity'];
        return $stock;
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'catalogue', 'product_catalogue');
    }
}
