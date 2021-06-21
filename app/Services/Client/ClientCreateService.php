<?php

namespace App\Services\Client;

use App\Models\Client;
use App\Repository\Client\ClientRepository;

class ClientCreateService
{
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(array $data)
    {
        $client = Client::makeClient($data);
        $this->repository->create($client);
        return true;
    }
}
