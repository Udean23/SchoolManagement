<?php

namespace App\Session\Repositories;

use App\Session\Models\Session;

class EloquentSessionRepository implements SessionRepositoryInterface
{
    public function all()
    {
        return Session::all();
    }
}