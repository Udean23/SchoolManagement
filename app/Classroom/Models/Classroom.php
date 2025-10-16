<?php

namespace App\Classroom\Models;

use App\Auth\Models\Auth;
use App\Auth\Models\UserClassroom;
use App\Course\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [];
    
    public function Teacher()
    {
        return $this->belongsTo(Auth::class);
    }

    public function UserClassroom()
    {
        return $this->hasMany(UserClassroom::class);
    }

    public function Course()
    {
        return $this->hasMany(Course::class);
    }

}