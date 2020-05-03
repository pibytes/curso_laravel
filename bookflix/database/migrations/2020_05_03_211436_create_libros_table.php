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
    Schema::create('categorias', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombre');
        $table->timestamps();
    }); // como cateogoria aparece en libro tiene que hacerse primero

    Schema::create('libros', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('titulo');
        $table->mediumText('descripcion');
        $table->text('contenido');
        $table->timestamp('fecha')->nullable();
        $table->unsignedBigInteger('categoria_id'); // Relación con categorias
        $table->foreign('categoria_id')->references('id')->on('categorias'); // clave foranea para que se haga relac a nivel de bd
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
        Schema::dropIfExists('categorias');//primero elimino libros
        //poniendo una migracion aca puedo eliminar el archivo de migración
    }
}
