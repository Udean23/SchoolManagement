<?php

namespace App\Auth\Models;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected $guarded = [];

    public function userClassroom()
    {
        return $this->hasMany(UserClassroom::class);
    }
}