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
        //return 'TXN-' . date('Ymd') . '-' . strtoupper(Str::random(6));
        return 'TXN-' . now()->format('dymHis');
    }

    public function getTotalBalanceAttribute()
    {
        return $this->balance + $this->commission_balance;
    }

    // Credit wallet
    public function credit($amount, $category, $description = null, $relatedOrderId = null, $paymentReference = null)
    {
        $balanceBefore = $this->balance;
        $this->balance += $amount;
        $this->save();

        return $this->transactions()->create([
            'agent_id' => $this->agent_id,
            'transaction_reference' => $this->generateReference(),
            'type' => 'credit',
            'category' => $category,
            'amount' => $amount,
            'balance_before' => $balanceBefore,
            'balance_after' => $this->balance,
            'description' => $description,
            'payment_method' => "Admin Payment",
//            'related_order_id' => $relatedOrderId,
            'payment_reference' => $paymentReference,
            'status' => 'completed'
        ]);
    }

}
