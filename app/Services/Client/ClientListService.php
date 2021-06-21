<?php

namespace App\Services\Client;

use App\Repository\Client\ClientRepository;

class ClientListService
{
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $clients = $this->repository->show();
        return $clients->toArray();
    }
}
