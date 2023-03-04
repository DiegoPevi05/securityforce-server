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
            $table->string('contact_subtitle',255)->default('N/A');
            $table->string('presencia',100)->default('N/A');
            $table->string('address',255)->default('N/A');
            $table->string('phone1',255)->default('N/A');
            $table->string('mobile1',255)->default('N/A');
            $table->string('mobile2',255)->default('N/A');
            $table->string('website',255)->default('N/A');
            $table->string('facebook',255)->default('N/A');
            $table->string('email',255)->default('N/A');
            $table->string('instagram',255)->default('N/A');
            $table->string('tiktok',255)->default('N/A');
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
