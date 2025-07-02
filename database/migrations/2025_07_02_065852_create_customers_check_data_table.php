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
        Schema::create('customers_check_data', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('ogrn')->nullable();
            $table->string('kpp')->nullable();
            $table->string('okpo')->nullable();
            $table->string('status_sulst')->nullable();
            $table->string('ur_address')->nullable();
            $table->string('okved_code')->nullable();
            $table->string('okved_name')->nullable();
            $table->string('capital')->nullable();
            $table->string('director_fio')->nullable();
            $table->string('director_post')->nullable();
            $table->string('site')->nullable();
            $table->integer('bad_provider')->nullable();
            $table->integer('sanctions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers_check_data');
    }
};
