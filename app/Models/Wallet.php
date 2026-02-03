<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Wallet extends Model
{
    protected $fillable = [
        'agent_id',
        'balance',
        'commission_balance',
        'total_deposited',
        'total_spent',
        'total_commission_earned',
        'total_withdrawn',
    ];

    protected $casts = [
        'balance' => 'decimal:2',
        'commission_balance' => 'decimal:2',
        'total_deposited' => 'decimal:2',
        'total_spent' => 'decimal:2',
        'total_commission_earned' => 'decimal:2',
        'total_withdrawn' => 'decimal:2',
    ];

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function transactions()
    {
        return $this->hasMany(WalletTransaction::class);
    }

    private function generateReference()
    {
        return 'TXN-' . date('Ymd') . '-' . strtoupper(Str::random(6));
    }

    public function getTotalBalanceAttribute()
    {
        return $this->balance + $this->commission_balance;
    }

}
