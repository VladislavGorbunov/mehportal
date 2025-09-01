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
        Schema::create('commercial_offers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company_name');
            $table->string('company_inn');
            $table->string('contact_person');
            $table->string('company_region');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('cp_text');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('order_id');
        });

        Schema::table('commercial_offers', function (Blueprint $table) {
            $table->unsignedBigInteger('executor_id');
            $table->foreign('executor_id')->references('id')->on('executors')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commercial_offers');
    }
};
