<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Services\Worker\WorkerCreateService;
use Illuminate\Http\Request;

class WorkerCreateController extends Controller
{
    public $service;

    public function __construct(WorkerCreateService $service)
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
