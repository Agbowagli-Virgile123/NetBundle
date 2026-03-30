<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth')->default(now());
            $table->string('gender');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('whatsapp_number')->unique()->nullable();
            $table->string('mobile_money_network');
            $table->string('mobile_money_number')->unique();
            $table->string('password')->nullable()->default('123');
            $table->string('referral_code')->unique(); // Agent's unique referral code
            $table->foreignId('referred_by')->nullable()->constrained('agents')->nullOnDelete(); // Who referred this agent
            $table->decimal('commission_rate', 5, 2)->default(0); // Agent commission percentage (e.g., 5.00 for 5%)
            $table->boolean('is_active')->default(true);
            $table->boolean('is_verified')->default(false); // KYC verification status
            $table->string('id_type');
            $table->string('id_number')->unique(); // For KYC
            $table->string('region');
            $table->string('city');
            $table->text('address');
            $table->Text('reason')->nullable();
            $table->boolean('have_sales_experience')->nullable();
            $table->string('way_of_hearing_us')->nullable();
            $table->string('image')->nullable(); // Photo
            $table->timestamp('created_at');
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('last_login_at')->nullable();
        });

        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
            $table->decimal('balance', 15, 2)->default(0); // Main wallet balance
            $table->decimal('commission_balance', 15, 2)->default(0); // Earned commission (separate)
            $table->decimal('total_deposited', 15, 2)->default(0); // Lifetime deposits
            $table->decimal('total_spent', 15, 2)->default(0); // Lifetime spending
            $table->decimal('total_commission_earned', 15, 2)->default(0); // Lifetime commission
            $table->decimal('total_withdrawn', 15, 2)->default(0); // Lifetime withdrawals
            $table->timestamps();
        });

        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wallet_id')->constrained('wallets')->onDelete('cascade');
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
            $table->string('transaction_reference')->unique(); // e.g., TXN-20260131-001
            $table->enum('type', ['credit', 'debit']); // Money in or out
            $table->enum('category', [
                'deposit',           // Agent adds money
                'purchase',          // Agent buys bundle
                'commission',        // Commission earned
                'withdrawal',        // Agent withdraws money
                'refund',           // Refund from failed order
                'bonus',            // Admin bonus
                'penalty'           // Admin penalty
            ]);
            $table->decimal('amount', 15, 2);
            $table->decimal('balance_before', 15, 2);
            $table->decimal('balance_after', 15, 2);
            $table->string('payment_method')->nullable(); // paystack, bank_transfer, etc.
            $table->string('payment_reference')->nullable(); // Paystack reference
            $table->text('description')->nullable();
            //$table->foreignId('related_order_id')->nullable()->constrained('orders')->nullOnDelete();
            $table->enum('status', ['pending', 'completed', 'failed', 'cancelled'])->default('pending');
            $table->timestamps();
        });

        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('account_name');
            $table->string('branch')->nullable();
            $table->boolean('is_primary')->default(false);
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });

        Schema::create('withdrawal_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
            $table->foreignId('bank_account_id')->constrained('bank_accounts')->onDelete('cascade');
            $table->string('request_reference')->unique(); // e.g., WDR-20260131-001
            $table->decimal('amount', 15, 2);
            $table->decimal('charges', 15, 2)->default(0); // Processing fee
            $table->decimal('net_amount', 15, 2); // Amount after charges
            $table->enum('status', ['pending', 'approved', 'processing', 'completed', 'rejected', 'cancelled'])
                ->default('pending');
            $table->text('notes')->nullable(); // Agent's notes
            $table->text('admin_notes')->nullable(); // Admin's notes
            $table->foreignId('processed_by')->nullable()->constrained('users')->nullOnDelete(); // Admin who processed
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('processed_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
        Schema::dropIfExists('wallets');
        Schema::dropIfExists('wallet_transactions');
        Schema::dropIfExists('bank_accounts');
        Schema::dropIfExists('withdrawal_requests');
    }
};
