<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\ClientGetService;
use Illuminate\Http\Request;

class ClientGetController extends Controller
{
    public $service;

    public function __construct(ClientGetService $service)
    {
        $this->service = $service;
    }

    public function index($document)
    {
        $client = $this->service->index($document);
        return json_encode(['client' => $client->toArray()]);
    }
}
