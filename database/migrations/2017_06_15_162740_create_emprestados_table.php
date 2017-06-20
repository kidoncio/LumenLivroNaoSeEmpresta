<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprestadosTable extends Migration
{

    public function up()
    {
        Schema::create('emprestados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
            $table->integer('livro_id')->unsigned();
            $table->foreign('livro_id')
                ->references('id')
                ->on('livros');
        });
    }

    public function down()
    {
        Schema::drop('emprestados');
    }
}
