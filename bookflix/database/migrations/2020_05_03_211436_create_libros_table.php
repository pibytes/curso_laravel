<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('libros', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('titulo');
        $table->mediumText('descripcion');
        $table->text('contenido');
        $table->timestamp('fecha')->nullable();
        $table->unsignedInteger('categoria_id'); // Relación con categorias
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
        Schema::dropIfExists('libros');
    }
}
