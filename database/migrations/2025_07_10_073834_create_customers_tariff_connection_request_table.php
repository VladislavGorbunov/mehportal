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
        Schema::create('customers_tariff_connection_request', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('tariff_months');
            $table->string('price')->nullable();
            $table->string('title');
            $table->string('inn');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers_tariff_connection_request');
    }
};
