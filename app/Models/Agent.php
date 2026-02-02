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
        'way_of_hearing',
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
    ];


    protected static function booted():void
    {
        static::created(fn () => cache()->forget('admin_sidebar_counts'));
        static::deleted(fn () => cache()->forget('admin_sidebar_counts'));
    }


    // Auto-generate referral code for agents
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($agent) {
            if (empty($agent->referral_code)) {
                $agent->referral_code = 'AG-' . strtoupper(Str::random(5));
            }
        });

        static::created(function ($agent) {
            //Wallet::create(['agent_id' => $model->id]);
            $agent->wallet()->create();
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
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isAgent()
    {
        return $this->role === 'agent';
    }

    public function isCustomer()
    {
        return $this->role === 'customer';
    }

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
