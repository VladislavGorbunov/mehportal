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
        Schema::create('premium_customers_info', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('tariff_months');
            $table->string('price');
            $table->timestamp('premium_start_date');
            $table->timestamp('premium_end_date');
            $table->string('payment_invoice');
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premium_customers_info');
    }
};
