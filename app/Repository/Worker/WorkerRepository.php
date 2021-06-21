<?php

namespace App\Repository\Worker;

use App\Models\Worker;

class WorkerRepository implements WorkerAbstractRepository
{
    public function create(Worker $worker)
    {
        $worker->save();
        return true;
    }

    public function get($id)
    {
        $worker = Worker::where('id', $id)->first();
        return $worker;
    }

    public function show()
    {
        $worker = Worker::all();
        return $worker;
    }

    public function update(Worker $worker)
    {
        $worker->save();
        return true;
    }

    public function delete(Worker $worker)
    {
        $worker->delete();
        return true;
    }
}
