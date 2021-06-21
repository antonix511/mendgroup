<?php

namespace App\Repository\Client;

use App\Models\Client;

class ClientRepository implements ClientAbstractRepository
{
    public function create(Client $client)
    {
        $client->save();
        return true;
    }

    public function show()
    {
        $clients = Client::all();
        return $clients;
    }

    public function get($document)
    {
        $client = Client::where('document', $document)->first();
        return $client;
    }

    public function delete(Client $client)
    {
        $client->delete();
        return true;
    }

    public function update(Client $client)
    {
        $client->save();
        return true;
    }
}
