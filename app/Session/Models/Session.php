<?php

namespace App\Session\Models;

use App\Course\Models\Course;
use App\DisscusionRoom\Models\DisscusionRoom;
use App\Task\Models\TaskMaterial;
use App\Task\Models\TaskSubmission;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = [];

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }

    public function DisscusionRoom()
    {
        return $this->hasMany(DisscusionRoom::class);
    }

    public function TaskSubmission()
    {
        return $this->hasMany(TaskSubmission::class);
    }

    public function TaskMaterial()
    {
        return $this->hasMany(TaskMaterial::class);
    }
}