<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Services\Worker\WorkerGetService;
use Illuminate\Http\Request;

class WorkerGetController extends Controller
{
    private $service;

    public function __construct(WorkerGetService $service)
    {
        $this->service = $service;
    }

    public function index($id)
    {
        $worker = $this->service->index($id);
        return json_encode(['worker' => $worker->toArray()]);
    }
}
