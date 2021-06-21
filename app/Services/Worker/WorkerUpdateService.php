<?php


namespace App\Services\Worker;


use App\Repository\Worker\WorkerRepository;

class WorkerUpdateService
{
    private $repository;

    public function __construct(WorkerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($id, array $data)
    {
        $worker = $this->repository->get($id);
        // update
    }
}
