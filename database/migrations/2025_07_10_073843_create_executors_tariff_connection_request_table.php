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
        Schema::create('executors_tariff_connection_request', function (Blueprint $table) {
            $table->id();
            $table->integer('executor_id');
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
        Schema::dropIfExists('executors_tariff_connection_request');
    }
};
