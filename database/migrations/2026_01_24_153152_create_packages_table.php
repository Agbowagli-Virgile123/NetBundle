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

        // 1. Create tags table
        Schema::create('package_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // "Popular", "Best Value", "New", "Hot Deal"
            $table->string('slug')->unique(); // "popular", "best-value", "new", "hot-deal"
            $table->string('color')->nullable(); // Badge color: "#FF6B6B", "#4ECDC4"
            $table->string('icon')->nullable(); // Icon class: "fa-fire", "fa-star"
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->dateTime('created_at')->default(now());
        });


        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('network_id')->constrained()->onDelete('cascade');
            $table->foreignId('package_tag_id')->constrained()->onDelete('cascade');
            $table->string('name'); // e.g., "1GB Daily", "5GB Weekly"
            $table->string('data_amount'); // e.g., "1GB", "500MB", "10GB"
            $table->decimal('cost_price', 10, 2); // What you pay to API provider
            $table->decimal('selling_price', 10, 2); // What customers pay
            $table->decimal('agent_price', 10, 2)->nullable(); // Special price for agents
            $table->string('validity'); // e.g., "1 Day", "7 Days", "30 Days"
            $table->integer('validity_days')->nullable(); // Numeric value for sorting/filtering
            $table->text('description')->nullable();
            $table->string('package_code')->nullable(); // API-specific code for this package
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->integer('stock_limit')->nullable();
            $table->dateTime('created_at')->default(now());
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_tags');
        Schema::dropIfExists('packages');
    }
};
