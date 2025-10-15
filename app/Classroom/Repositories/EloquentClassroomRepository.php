<?php

namespace App\Classroom\Repositories;

use App\Classroom\Models\Classroom;

class EloquentClassroomRepository implements ClassroomRepositoryInterface
{
    public function all()
    {
        return Classroom::all();
    }
}