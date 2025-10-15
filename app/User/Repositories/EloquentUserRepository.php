<?php

namespace App\User\Repositories;

use App\User\Models\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return User::all();
    }
}