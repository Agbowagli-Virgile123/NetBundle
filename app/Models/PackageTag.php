<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageTag extends Model
{
    public $timestamps = false;

    protected $table = 'package_tags';

    protected $fillable = [
        'name',
        'slug',
        'color',
        'icon',
        'description',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
        'created_at' => 'datetime'
    ];

    protected static function booted()
    {
        static::creating(function ($tag) {

            // If sort_order is already set, respect it
            if (!is_null($tag->sort_order)) {
                return;
            }

            // Get next sort order safely
            $tag->sort_order = (self::max('sort_order') ?? 0) + 1;
        });
    }

    public function packages(){

        return $this->hasMany(Package::class);
    }

}
