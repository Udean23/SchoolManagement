<?php

namespace App\DisscusionRoom\Repositories;

use App\DisscusionRoom\Models\DisscusionRoom;

class EloquentDisscusionRoomRepository implements DisscusionRoomRepositoryInterface
{
    public function all()
    {
        return DisscusionRoom::all();
    }
}