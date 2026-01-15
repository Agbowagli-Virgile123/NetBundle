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
            $table->string('email');
            $table->string('password');
            $table->string('phone_number');
            $table->string('whatsapp_number');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('region');
            $table->string('city');
            $table->string('address');
            $table->string('id_type');
            $table->string('id_number');
            $table->string('mobile_money_network');
            $table->string('mobile_money_number');
            $table->string('reason');
            $table->boolean('have_sale_experience');
            $table->string('way_of_hearing_us');
            $table->string('image_path')->nullable();
            $table->dateTime('created_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
