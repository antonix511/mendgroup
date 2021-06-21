<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Services\Worker\WorkerListService;
use Illuminate\Http\Request;

class WorkerListController extends Controller
{
    private $service;

    public function __construct(WorkerListService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $listWorker = $this->service->index();
        return json_encode(['workers' => $listWorker]);
    }
}
