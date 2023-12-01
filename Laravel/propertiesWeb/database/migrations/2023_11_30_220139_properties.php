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
        Schema::create('properties', function (Blueprint $table) {
            $table->id('IDProperty');
            $table->string('Address');
            $table->text('Description');
            $table->decimal('EstimatedValue', 10, 2);
            $table->string('Status');
            $table->text('PropertyDistribution');
            $table->integer('ConstructionArea');
            $table->integer('SurfaceArea');
            $table->string('Municipality');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
