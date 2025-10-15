<?php

namespace App\Course\Repositories;

use App\Course\Models\Course;

class EloquentCourseRepository implements CourseRepositoryInterface
{
    public function all()
    {
        return Course::all();
    }
}