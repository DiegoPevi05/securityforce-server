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
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('N/A');
            $table->string('subtitle')->default('N/A');
            $table->string('content')->default('N/A');
            $table->string('pretitle')->default('N/A');
            $table->string('subpretitle')->default('N/A');
            $table->string('imageUrl')->default('N/A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industries');
    }
};
