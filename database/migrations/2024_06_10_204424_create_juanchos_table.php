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
        Schema::create('juanchos', function (Blueprint $table) {
            $table->id();
            $table->string('es_guadalajara')->nullable();
            $table->string('es_aire_libre')->nullable();
            $table->String('es_evento_grande')->nullable();
            $table->String('es_todo_el_dia')->nullable();
            $table->String('manana_o_noche')->nullable();
            $table->String('temporada')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juanchos');
    }
};
