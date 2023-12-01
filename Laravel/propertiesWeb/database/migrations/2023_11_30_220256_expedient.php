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
        Schema::create('expedients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IDProperty')->constrained('properties', 'IDProperty');
            $table->date('Date');
            $table->string('Status');
            $table->string('Result');
            $table->foreignId('buyer_id')->constrained('buyers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedient');
    }
};