<?php


namespace App\Services\Worker;


use App\Repository\Worker\WorkerRepository;

class WorkerDeleteService
{
    private $repository;

    public function __construct(WorkerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($id)
    {
        $worker = $this->repository->get($id);
        return $this->repository->delete($worker);
    }
}
