<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{

    public function up()
    {
        Schema::create('livros', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',100);
            $table->boolean('disponivel');
            $table->integer('autor_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->foreign('autor_id')
                ->references('id')
                ->on('autors');
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias');
        });
    }

    public function down()
    {
        Schema::drop('livros');
    }
}
