<?php

namespace App\Services\Client;

use App\Repository\Client\ClientRepository;

class ClientUpdateService
{
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($document, array $data)
    {
        $client = $this->repository->get($document);
        // PENDIENTE
    }
}
