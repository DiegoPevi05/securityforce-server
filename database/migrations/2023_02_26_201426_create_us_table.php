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
        Schema::create('us', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->default('N/A');
            $table->string('content',1500)->default('N/A');
            $table->string('imageUrl',1500)->default('N/A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('us');
    }
};
