<?php

namespace App\Task\Repositories;

use App\Task\Models\Task;

class EloquentTaskRepository implements TaskRepositoryInterface
{
    public function all()
    {
        return Task::all();
    }
}