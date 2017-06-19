<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorsTable extends Migration
{

    public function up()
    {
        Schema::create('autors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
        });
    }

    public function down()
    {
        Schema::drop('autors');
    }
}
