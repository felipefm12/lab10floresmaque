<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics_mangas', function (Blueprint $table) {
            $table->id();
            $table->string('imagenes');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('etiquetas');
            $table->string('comentarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics_mangas');
    }
}
