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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propiedad_id')->nullable();
            $table->date('fecha');
            $table->string('estado');
            $table->string('resultado');
            $table->unsignedBigInteger('comprador_potencial_id')->nullable();
            $table->timestamps();

            $table->foreign('propiedad_id')->references('id')->on('propiedad_inmobiliarias');
            $table->foreign('comprador_potencial_id')->references('id')->on('comprador_potencials');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
    }
};
