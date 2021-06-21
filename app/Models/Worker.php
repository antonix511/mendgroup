<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'country',
        'address'
    ];

    public static function makeWorker(array $data)
    {
        $worker = new Worker();
        $worker->name = $data['name'];
        $worker->surname = $data['surname'];
        $worker->country = $data['country'];
        $worker->address = $data['address'];
        return $worker;
    }
}
