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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique(); // e.g., ORD-20260227-ABC123
            $table->foreignId('agent_id')->nullable()->constrained('agents')->nullOnDelete();
            $table->foreignId('package_id')->constrained('packages')->onDelete('restrict');
            $table->foreignId('network_id')->constrained('networks')->onDelete('restrict');

            // Recipient details
            $table->string('recipient_phone'); // Phone number to receive the bundle
            $table->string('recipient_name')->nullable(); // Optional: customer name

            // Pricing
            $table->decimal('package_price', 10, 2); // Price at time of purchase (snapshot)
            $table->decimal('cost_price', 10, 2); // Your cost at time of purchase
            $table->decimal('commission_amount', 10, 2)->default(0); // Commission earned
            $table->decimal('total_amount', 10, 2); // Final amount paid

            // Order status
            $table->enum('status', [
                'pending',      // Order created, payment pending
                'paid',         // Payment confirmed
                'processing',   // Sending to API
                'completed',    // Successfully delivered
                'failed',       // API delivery failed
                'refunded',     // Money refunded
                'cancelled'     // Order cancelled
            ])->default('pending');

            // Payment details
            $table->enum('payment_method', ['wallet', 'paystack', 'cash'])->default('wallet');
            $table->string('payment_reference')->nullable(); // Paystack reference
            $table->enum('payment_status', ['pending', 'paid', 'failed', 'refunded'])->default('pending');

            // API delivery details
            $table->string('api_reference')->nullable(); // API transaction reference
            $table->text('api_response')->nullable(); // Full API response (JSON)
            $table->text('failure_reason')->nullable(); // Why it failed
            $table->integer('retry_count')->default(0); // Number of retry attempts

            // Timestamps
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('processed_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('failed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Indexes for performance
            $table->index('order_number');
            $table->index('status');
            $table->index('agent_id');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
