<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Services\Worker\WorkerUpdateService;
use Illuminate\Http\Request;

class WorkerUpdateController extends Controller
{
    private $service;

    public function __construct(WorkerUpdateService $service)
    {
        $this->service = $service;
    }
}
