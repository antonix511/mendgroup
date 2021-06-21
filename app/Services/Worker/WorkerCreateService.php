<?php


namespace App\Services\Worker;


use App\Models\Worker;
use App\Repository\Worker\WorkerRepository;

class WorkerCreateService
{
    private $repository;

    public function __construct(WorkerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(array $data)
    {
        $worker = Worker::makeWorker($data);
        $this->repository->create($worker);
        return true;
    }
}
