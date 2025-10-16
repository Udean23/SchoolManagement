<?php

namespace App\Task\Models;

use Illuminate\Database\Eloquent\Model;

class TaskSubmissionMaterial extends Model
{
    protected $guarded = [];

    public function TaskSubmission()
    {
        return $this->belongsTo(TaskSubmission::class);
    }
}