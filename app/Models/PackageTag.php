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

    public function packages(){

        return $this->hasMany(Package::class);
    }

}
