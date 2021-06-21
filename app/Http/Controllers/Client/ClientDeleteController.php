<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\ClientDeleteService;
use Illuminate\Http\Request;

class ClientDeleteController extends Controller
{
    public $service;

    public function __construct(ClientDeleteService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request, $document)
    {
        $result = $this->service->index($document);
        return json_encode(['result' => $result]);
    }
}
