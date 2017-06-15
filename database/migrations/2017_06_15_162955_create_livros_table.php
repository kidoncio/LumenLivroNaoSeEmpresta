<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{

    public function up()
    {
        Schema::create('livros', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('livro_id');
            $table->string('titulo',100);
            $table->string('categoria', 50);
            $table->boolean('disponivel');
            $table->integer,unsigned('categoria_id');
            $table->integer,unsigned('autor_id');
            $table->integer('autor_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->foreign('autor_id')
                ->references('id')
                ->on('autors');
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categoria');

        });
    }

    public function down()
    {
        Schema::drop('livros');
    }
}
