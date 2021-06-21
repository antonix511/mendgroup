<?php

namespace App\Services\Client;

use App\Repository\Client\ClientRepository;

class ClientDeleteService
{
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($document)
    {
        $client = $this->repository->get($document);
        return $this->repository->delete($client);
    }
}
