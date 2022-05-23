<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObrasNovelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras_novelas', function (Blueprint $table) {
            $table->id();
            $table->string('portada');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('texto');
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
        Schema::dropIfExists('obras_novelas');
    }
}
