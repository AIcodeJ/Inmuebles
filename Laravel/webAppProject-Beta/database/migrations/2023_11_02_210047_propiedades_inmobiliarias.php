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
        Schema::create('propiedad_inmobiliarias', function (Blueprint $table) {
            $table->id();
            $table->string('direccion')->nullable();
            $table->string('descripcion')->default('')->nullable(false);
            $table->decimal('valor_estimado', 10, 2)->default(0.0);
            $table->string('estado')->default('consulta');
            $table->string('distribucion_inmueble')->nullable();
            $table->decimal('metros_construccion', 8, 2)->default(0);
            $table->decimal('metros_superficie', 8, 2)->default(0);
            $table->string('municipio')->default('Valor predeterminado')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedad_inmobiliarias');
    }
};
