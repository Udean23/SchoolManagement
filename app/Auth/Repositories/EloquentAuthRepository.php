<?php

namespace App\Auth\Repositories;

use App\Auth\Models\Auth;

class EloquentAuthRepository implements AuthRepositoryInterface
{
    public function all()
    {
        return Auth::all();
    }
}