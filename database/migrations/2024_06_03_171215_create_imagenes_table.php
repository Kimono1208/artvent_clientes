<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesTable extends Migration
{
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('producto_id');
            $table->string('nombre_archivo');
            $table->string('tipo_archivo');
            $table->String('ubicacion');
            $table->string('categoria'); // Columna para la categoría de la imagen
            $table->timestamps();

            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
