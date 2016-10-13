<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers', function(Blueprint $table){
            $table->increments('id')->index();
            $table->string('name');
            $table->string('role');
            $table->string('title');
            $table->integer('bloq');
            $table->string('name_photograph');
            $table->string('facebook');
            $table->string('twitter');
            $table->time('start');
            $table->time('finish');
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
        Schema::drop('speakers');
    }
}
