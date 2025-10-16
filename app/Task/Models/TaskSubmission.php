<?php

namespace App\Task\Models;

use App\Session\Models\Session;
use Illuminate\Database\Eloquent\Model;

class TaskSubmission extends Model
{
    protected $guarded = [];

    public function Session()
    {
        return $this->belongsTo(Session::class);
    }
}