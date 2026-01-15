<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Agent extends Authenticatable
{
    public $timestamps = false;

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
