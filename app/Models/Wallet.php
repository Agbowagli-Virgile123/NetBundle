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
        return $this->belongsTo(User::class);
    }

//    public function transactions()
//    {
//        return $this->hasMany(WalletTransaction::class);
//    }

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
            'related_order_id' => $relatedOrderId,
            'payment_reference' => $paymentReference,
            'status' => 'completed'
        ]);
    }

    // Debit wallet
    public function debit($amount, $category, $description = null, $relatedOrderId = null)
    {
        if ($this->balance < $amount) {
            throw new \Exception('Insufficient wallet balance');
        }

        $balanceBefore = $this->balance;
        $this->balance -= $amount;
        $this->save();

        return $this->transactions()->create([
            'user_id' => $this->user_id,
            'transaction_reference' => $this->generateReference(),
            'type' => 'debit',
            'category' => $category,
            'amount' => $amount,
            'balance_before' => $balanceBefore,
            'balance_after' => $this->balance,
            'description' => $description,
            'related_order_id' => $relatedOrderId,
            'status' => 'completed'
        ]);
    }

    // Add commission
    public function addCommission($amount, $orderId, $description = null)
    {
        $this->commission_balance += $amount;
        $this->total_commission_earned += $amount;
        $this->save();

        return $this->transactions()->create([
            'user_id' => $this->user_id,
            'transaction_reference' => $this->generateReference(),
            'type' => 'credit',
            'category' => 'commission',
            'amount' => $amount,
            'balance_before' => $this->commission_balance - $amount,
            'balance_after' => $this->commission_balance,
            'description' => $description ?? 'Commission earned',
            'related_order_id' => $orderId,
            'status' => 'completed'
        ]);
    }

    // Transfer commission to main balance
    public function transferCommissionToBalance()
    {
        if ($this->commission_balance > 0) {
            $amount = $this->commission_balance;
            $this->balance += $amount;
            $this->commission_balance = 0;
            $this->save();

             $trans  = $this->transactions()->create([
                'user_id' => $this->user_id,
                'transaction_reference' => $this->generateReference(),
                'type' => 'credit',
                'category' => 'deposit',
                'amount' => $amount,
                'balance_before' => $this->balance - $amount,
                'balance_after' => $this->balance,
                'description' => 'Commission transferred to main wallet',
                'status' => 'completed'
            ]);
        }

        return $trans;
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
