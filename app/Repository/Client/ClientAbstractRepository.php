<?php

namespace App\Repository\Client;

use App\Models\Client;

interface ClientAbstractRepository
{
    public function get($document);

    public function show();

    public function update(Client $client);

    public function delete(Client $client);

    public function create(Client $client);
}
