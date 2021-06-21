<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'guide_date',
        'seller',
        'buyer',
        'observation'
    ];

    public $timestamps = false;

    public function items()
    {
        return $this->hasMany('guide_item', 'guide_id');
    }

    public static function makeGuide(array $data)
    {
        $guide = new Guide();
        $guide->type = $data['type'];
        $guide->guide_date = $data['guide_date'];
        $guide->seller = $data['seller'];
        $guide->buyer = $data['buyer'];
        $guide->observation = $data['observation'];
        return $guide;
    }
}
