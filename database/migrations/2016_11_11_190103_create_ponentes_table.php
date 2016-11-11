<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePonentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grado');
            $table->string('nombre');
            $table->string('institucion');
            $table->string('tema');
            $table->string('foto_ponente');
            $table->string('facebook');
            $table->string('twitter');
            $table->boolean('activo');
            $table->rememberToken();
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
        Schema::drop('ponentes');
    }
}
