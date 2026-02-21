<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    protected $table = 'wallet_transactions';

    protected $fillable = [
        'wallet_id',
        'agent_id',
        'transaction_reference',
        'type',
        'category',
        'amount',
        'balance_before',
        'balance_after',
        'payment_method',
        'payment_reference',
        'description',
        'related_order_id',
        'status'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'balance_before' => 'decimal:2',
        'balance_after' => 'decimal:2',
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'related_order_id');
    }
}
