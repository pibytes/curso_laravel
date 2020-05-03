<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtiquetaLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etiqueta_libro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('libro_id'); // Relación con libros
            $table->foreign('libro_id')->references('id')->on('libros'); // clave foranea
            $table->unsignedBigInteger('etiqueta_id'); // Relación con etiquetas
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas'); // clave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etiqueta_libro');
    }
}
