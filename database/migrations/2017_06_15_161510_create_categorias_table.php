<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{

    public function up()
    {
        Schema::create('categorias', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->text('descricao');
        });
    }

    public function down()
    {
        Schema::drop('categorias');
    }
}
