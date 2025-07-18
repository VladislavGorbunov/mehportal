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
        Schema::create('customer_companies', function (Blueprint $table) {
            $table->id();
            $table->string('legal_form');
            $table->string('title');
            $table->string('inn');
            $table->integer('region_id');
            $table->string('address');
            $table->string('contact_person');
            $table->string('phone');
            $table->string('extension_number')->nullable();
            $table->string('email');
            $table->string('description');
            $table->integer('active')->default(true);
            $table->timestamps();
        });

        Schema::table('customer_companies', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_companies');
    }
};
