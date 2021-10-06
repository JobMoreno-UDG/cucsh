<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revistas', function (Blueprint $table) {
            $table->string('clasificacion',15)->unique();
            $table->string('titulo',100);
            $table->string('autor',50);
            $table->year('anio');
            $table->string('tomo_numero',15);
            $table->string('editorial',50);
            $table->string('lugar_publicacion',50);
            $table->integer('paginas');
            $table->string('volumen',10);
            $table->string('serie',20);
            $table->string('isbn_issn',25);
            $table->dateTime('fecha_ingreso');
            $table->string('situacion',15);
            $table->string('space',20);
            $table->string('space2',20);
            $table->softDeletes();
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
        Schema::dropIfExists('revistas');
    }
}
