<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\ClientCreateService;
use Illuminate\Http\Request;

class ClientCreateController extends Controller
{
    public $service;

    public function __construct(ClientCreateService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $data = $this->getData($request);
        $result = $this->service->index($data);
        return json_encode(['result' => $result]);
    }
}
