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
        Schema::create('executor_companies', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('legal_form');
            $table->string('title');
            $table->string('inn');
            $table->integer('region_id');
            $table->string('address');
            $table->string('contact_person');
            $table->string('phone');
            $table->string('extension_number')->nullable();
            $table->string('site')->nullable();
            $table->string('email');
            $table->string('description');
            $table->integer('active')->default(true);
            $table->timestamps();
        });

        Schema::table('executor_companies', function (Blueprint $table) {
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
        Schema::dropIfExists('executor_companies');
    }
};
