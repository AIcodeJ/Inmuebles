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
        Schema::create('comprador_potencials', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->default('Desconocido');
            $table->string('contacto')->default('');
            $table->decimal('presupuesto', 10, 2)->default(0.00);
            $table->text('preferencias')->default('Sin preferencias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprador_potencials');
    }
};
