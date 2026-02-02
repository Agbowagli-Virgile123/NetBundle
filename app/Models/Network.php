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

    //Generate the sort_number
    protected static function booted()
    {
        static::creating(function ($network) {

            // If sort_order is already set, respect it
            if (!is_null($network->sort_order)) {
                return;
            }

            // Get next sort order safely
            $network->sort_order = (self::max('sort_order') ?? 0) + 1;
        });
    }

    //Relationship
    public function packages(){

        return $this->hasMany(Package::class);
    }

    // Relationship: A network has many orders (through packages)
    public function orders()
    {
        return $this->hasManyThrough(Order::class, Package::class);
    }

}
