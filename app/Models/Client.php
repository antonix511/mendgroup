<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'document',
        'document_type',
        'address',
        'city',
        'number'
    ];

    public static function makeClient(array $data)
    {
        $client = new Client();
        $client->name = $data['name'];
        $client->document = $data['document'];
        $client->document_type = $data['document_type'];
        $client->address = $data['address'];
        $client->city = $data['city'];
        $client->number = $data['number'];
        return $client;
    }
}
