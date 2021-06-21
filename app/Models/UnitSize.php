<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitSize extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'unit'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'unit_size', 'unit');
    }
}
