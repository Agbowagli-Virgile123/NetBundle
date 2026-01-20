<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    public $timestamps = false;

    protected $table = 'networks';

    protected $fillable = [
        'name',
        'code',
        'logo',
        'primary_color',
        'secondary_color',
        'short_description',
        'description',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
        'created_at' => 'datetime',
    ];

}
