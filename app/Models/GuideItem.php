<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'guide_id',
        'product_catalogue',
        'quantity',
        'affectation'
    ];

    public $timestamps = false;

    public function guide()
    {
        return $this->belongsTo('guide', 'guide_id');
    }

    public static function makeGuideItem(array $data) {
        $item = new GuideItem();
        $item->guide_id = $data['guide_id'];
        $item->product_catalogue = $data['product_catalogue'];
        $item->quantity = $data['quantity'];
        $item->affectation = $data['affectation'];
        return $item;
    }
}
