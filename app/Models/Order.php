<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'order_number',
        'agent_id',
        'package_id',
        'network_id',
        'recipient_phone',
        'recipient_name',
        'package_price',
        'cost_price',
        'commission_amount',
        'total_amount',
        'status',
        'payment_method',
        'payment_reference',
        'payment_status',
        'api_reference',
        'api_response',
        'failure_reason',
        'retry_count',
        'paid_at',
        'processed_at',
        'completed_at',
        'failed_at'
    ];

    protected $casts = [
        'package_price' => 'decimal:2',
        'cost_price' => 'decimal:2',
        'commission_amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'retry_count' => 'integer',
        'paid_at' => 'datetime',
        'processed_at' => 'datetime',
        'completed_at' => 'datetime',
        'failed_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (empty($order->order_number)) {
                $order->order_number = 'ORD-' . date('Ymd') . '-' . strtoupper(Str::random(6));
            }
        });

        static::created(function ($order) {
            cache()->forget('admin_sidebar_counts');
        });

        static::deleted(function ($order) {
            cache()->forget('admin_sidebar_counts');
        });
    }

    // Relationships
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function network()
    {
        return $this->belongsTo(Network::class);
    }

    public function walletTransaction()
    {
        return $this->hasOne(WalletTransaction::class, 'related_order_id');
    }

    // Scopes
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopePaid($query)
    {
        return $query->where('status', 'paid');
    }

    public function scopeProcessing($query)
    {
        return $query->where('status', 'processing');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeFailed($query)
    {
        return $query->where('status', 'failed');
    }

    public function scopeByAgent($query, $agentId)
    {
        return $query->where('agent_id', $agentId);
    }

    public function scopeToday($query)
    {
        return $query->whereDate('created_at', today());
    }

    public function scopeThisWeek($query)
    {
        return $query->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
    }

    public function scopeThisMonth($query)
    {
        return $query->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year);
    }

    // Status check methods
    public function isPending()
    {
        return $this->status === 'pending';
    }

    public function isPaid()
    {
        return $this->status === 'paid' || $this->payment_status === 'paid';
    }

    public function isProcessing()
    {
        return $this->status === 'processing';
    }

    public function isCompleted()
    {
        return $this->status === 'completed';
    }

    public function isFailed()
    {
        return $this->status === 'failed';
    }

    public function canRetry()
    {
        return $this->isFailed() && $this->retry_count < 3;
    }

    // Status transition methods
    public function markAsPaid($paymentReference = null)
    {
        $this->update([
            'status' => 'paid',
            'payment_status' => 'paid',
            'payment_reference' => $paymentReference,
            'paid_at' => now()
        ]);
    }

    public function markAsProcessing()
    {
        $this->update([
            'status' => 'processing',
            'processed_at' => now()
        ]);
    }

    public function markAsCompleted($apiReference = null, $apiResponse = null)
    {
        $this->update([
            'status' => 'completed',
            'api_reference' => $apiReference,
            'api_response' => $apiResponse,
            'completed_at' => now()
        ]);

        // Award commission to agent
        if ($this->agent_id && $this->commission_amount > 0) {
            $this->agent->wallet->addCommission(
                $this->commission_amount,
                $this->id,
                "Commission from order {$this->order_number}"
            );
        }
    }

    public function markAsFailed($reason, $apiResponse = null)
    {
        $this->update([
            'status' => 'failed',
            'failure_reason' => $reason,
            'api_response' => $apiResponse,
            'failed_at' => now(),
            'retry_count' => $this->retry_count + 1
        ]);
    }

    public function markAsRefunded()
    {
        $this->update([
            'status' => 'refunded',
            'payment_status' => 'refunded'
        ]);

        // Refund money to agent's wallet
        if ($this->agent_id && $this->isPaid()) {
            $this->agent->wallet->credit(
                $this->total_amount,
                'refund',
                "Refund for failed order {$this->order_number}",
                $this->id
            );
        }
    }

    // Calculate profit
    public function getProfitAttribute()
    {
        return $this->package_price - $this->cost_price - $this->commission_amount;
    }

    // Get status badge color
    public function getStatusColorAttribute()
    {
        return match($this->status) {
            'pending' => 'warning',
            'paid' => 'info',
            'processing' => 'primary',
            'completed' => 'success',
            'failed' => 'danger',
            'refunded' => 'secondary',
            'cancelled' => 'dark',
            default => 'secondary'
        };
    }

    // Get status display text
    public function getStatusTextAttribute()
    {
        return ucfirst($this->status);
    }
}
