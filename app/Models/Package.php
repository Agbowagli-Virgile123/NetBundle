<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;
    public $timestamps = false;

    protected $table = 'packages';

    protected $fillable = [
        'network_id',
        'package_tag_id',
        'name',
        'data_amount',
        'cost_price',
        'selling_price',
        'agent_price',
        'validity',
        'validity_days',
        'description',
        'package_code',
        'is_active',
        'sort_order',
        'stock_limit'
    ];


    protected $casts = [
        'cost_price' => 'decimal:2',
        'selling_price' => 'decimal:2',
        'agent_price' => 'decimal:2',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
        'validity_days' => 'integer',
        'stock_limit' => 'integer',
        'created_at' => 'datetime',
    ];


    //Relationships
    public function network(){

        return $this->belongsTo(Network::class);
    }

    public function packageTag(){

        return $this->belongsTo(PackageTag::class);
    }

}
