<?php

namespace App\Auth\Models;

use App\Classroom\Models\Classroom;
use Illuminate\Database\Eloquent\Model;

class UserClassroom extends Model
{
    protected $guarded = [];

    public function Users()
    {
        return $this->belongsTo(UserClassroom::class);
    }

    public function Classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}