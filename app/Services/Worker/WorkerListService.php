<?php

namespace App\Services\Worker;

use App\Repository\Worker\WorkerRepository;

class WorkerListService
{
    private $repository;

    public function __construct(WorkerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $workers = $this->repository->show();
        return $workers->toArray();
    }
}
