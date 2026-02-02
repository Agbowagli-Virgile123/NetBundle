<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WithdrawalRequest extends Model
{
    protected $fillable = [
        'agent_id',
        'bank_account_id',
        'request_reference',
        'amount',
        'charges',
        'net_amount',
        'status',
        'notes',
        'admin_notes',
        'processed_by',
        'approved_at',
        'processed_at',
        'completed_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'charges' => 'decimal:2',
        'net_amount' => 'decimal:2',
        'approved_at' => 'datetime',
        'processed_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($withdrawal) {
            if (empty($withdrawal->request_reference)) {
                $withdrawal->request_reference = 'WDR-' . date('Ymd') . '-' . strtoupper(Str::random(6));
            }
        });
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class);
    }

    public function processedBy()
    {
        return $this->belongsTo(User::class, 'processed_by');
    }
}
