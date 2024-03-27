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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('enunciado_pregunta')->nullable();
            $table->string('imagen_pregunta')->nullable();
            $table->integer('cantidad_opciones');
            $table->integer('peso_pregunta');
            $table->string('respuesta_correcta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};
