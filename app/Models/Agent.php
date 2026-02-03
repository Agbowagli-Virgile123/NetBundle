<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;


class Agent extends Authenticatable
{
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'password',
        'date_of_birth',
        'gender',
        'phone_number',
        'email',
        'whatsapp_number',
        'mobile_money_network',
        'mobile_money_number',
        'referral_code',
        'referred_by',
        'commission_rate',
        'is_active',
        'is_verified',
        'id_type',
        'id_number',
        'region',
        'city',
        'address',
        'reason',
        'have_sales_experience',
        'way_of_hearing_us',
        'image',
        'verified_at',
        'last_login_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
        'verified_at' => 'datetime',
        'last_login_at' => 'datetime',
        'date_of_birth' => 'date',
        'is_active' => 'boolean',
        'is_verified' => 'boolean',
        'commission_rate' => 'decimal:2',
        'password' => 'hashed',
    ];


    protected static function booted()
    {
        //parent::boot();

        static::creating(function ($agent) {
            if (empty($agent->referral_code)) {
                $agent->referral_code = 'AG-'. strtoupper(Str::random(5));
            }
        });

        static::created(function ($agent) {
            $agent->wallet()->create([
                'balance' => 0,
                'commission_balance' => 0,
                'total_deposited' => 0,
                'total_spent' => 0,
                'total_commission_earned' => 0,
                'total_withdrawn' => 0,
            ]);

            cache()->forget('admin_sidebar_counts');
        });

        static::deleted(function () {
            cache()->forget('admin_sidebar_counts');
        });
    }


    // Relationships
    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function walletTransactions()
    {
        return $this->hasMany(WalletTransaction::class);
    }

    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }

    public function withdrawalRequests()
    {
        return $this->hasMany(WithdrawalRequest::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function referredAgents()
    {
        return $this->hasMany(User::class, 'referred_by');
    }

    public function referrer()
    {
        return $this->belongsTo(User::class, 'referred_by');
    }

    public function customers()
    {
        // Agent's customers (we'll create this relationship later in AFA feature)
        return $this->hasMany(Customer::class, 'agent_id');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeVerified($query)
    {
        return $query->where('is_verified', true);
    }

    public function scopeUnverified($query)
    {
        return $query->where('is_verified', false);
    }

    // Helper methods

    public function canPlaceOrder()
    {
        return $this->is_active && ($this->role === 'agent' ? $this->is_verified : true);
    }

    public function getTotalSalesAttribute()
    {
        return $this->orders()->where('status', 'completed')->sum('total_amount');
    }

    public function getTotalOrdersAttribute()
    {
        return $this->orders()->where('status', 'completed')->count();
    }
}
