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
            $table->string('title',255)->default('N/A');
            $table->string('description',1000)->default('N/A');
            $table->string('reason1',200)->default('N/A');
            $table->string('reason2',200)->default('N/A');
            $table->string('reason3',200)->default('N/A');
            $table->string('reason4',200)->default('N/A');
            $table->string('reason5',200)->default('N/A');
            $table->string('reason6',200)->default('N/A');
            $table->string('reason7',200)->default('N/A');
            $table->string('reason8',200)->default('N/A');
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
