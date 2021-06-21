<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Services\Worker\WorkerDeleteService;
use Illuminate\Http\Request;

class WorkerDeleteController extends Controller
{
    private $service;

    public function __construct(WorkerDeleteService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request, $id)
    {
        $result = $this->service->index($id);
        return json_encode(['result' => $result]);
    }
}
