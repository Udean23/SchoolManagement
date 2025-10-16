<?php

namespace App\Course\Models;

use App\Classroom\Models\Classroom;
use App\Session\Models\Session;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function Classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function Session()
    {
        return $this->hasMany(Session::class);
    }

    public function Teacher()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id', 'user_id');
    }
}