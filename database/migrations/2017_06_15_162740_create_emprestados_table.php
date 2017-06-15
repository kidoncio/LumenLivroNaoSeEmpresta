<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprestadosTable extends Migration
{

    public function up()
    {
        Schema::create('emprestados', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer,unsigned('livro_id');
            $table->integer,unsigned('user_id');
            $table->boolean('emprestado');
            $table->integer('livro_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('livro_id')
                ->references('id')
                ->on('livros');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

        });
    }

    public function down()
    {
        Schema::drop('emprestados');
    }
}
