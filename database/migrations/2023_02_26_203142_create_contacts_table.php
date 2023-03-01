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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_subtitle')->default('N/A');
            $table->string('presencia')->default('N/A');
            $table->string('address')->default('N/A');
            $table->string('phone1')->default('N/A');
            $table->string('mobile1')->default('N/A');
            $table->string('mobile2')->default('N/A');
            $table->string('website')->default('N/A');
            $table->string('facebook')->default('N/A');
            $table->string('email')->default('N/A');
            $table->string('instagram')->default('N/A');
            $table->string('tiktok')->default('N/A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
