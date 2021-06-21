<?php

namespace App\Repository\Worker;

use App\Models\Worker;

interface WorkerAbstractRepository
{
    public function get($id);

    public function show();

    public function update(Worker $worker);

    public function delete(Worker $worker);

    public function create(Worker $worker);
}
