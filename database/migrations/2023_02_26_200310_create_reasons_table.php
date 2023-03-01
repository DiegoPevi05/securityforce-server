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
        Schema::create('reasons', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('N/A');
            $table->string('description')->default('N/A');
            $table->string('reason1')->default('N/A');
            $table->string('reason2')->default('N/A');
            $table->string('reason3')->default('N/A');
            $table->string('reason4')->default('N/A');
            $table->string('reason5')->default('N/A');
            $table->string('reason6')->default('N/A');
            $table->string('reason7')->default('N/A');
            $table->string('reason8')->default('N/A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reasons');
    }
};
