<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDissertionsTable extends Migration
{
    /**
     * Run the migrations.
     *name, data, titulo, orientador, coorientador, resumo
     * @return void
     */
    public function up()
    {
        Schema::create('dissertions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('data');
            $table->string('titulo');
            $table->string('orientador');
            $table->string('cooorientador');
            $table->text('resumo');
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
        Schema::drop('dissertions');
    }
}
