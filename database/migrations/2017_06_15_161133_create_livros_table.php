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
            $table->string('titulo')->100();
            $table->string('categoria')->50();
            $table->boolean('disponivel');
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('livros');
    }
}
