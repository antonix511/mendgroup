<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\ClientListService;
use Illuminate\Http\Request;

class ClientListController extends Controller
{
    private $service;

    public function __construct(ClientListService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $listClient = $this->service->index();
        return json_encode(['clients' => $listClient]);
    }
}
