<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\ClientUpdateService;
use Illuminate\Http\Request;

class ClientUpdateController extends Controller
{
    private $service;

    public function __construct(ClientUpdateService $service)
    {
        $this->service = $service;
    }

    public function index()
    {

    }
}
