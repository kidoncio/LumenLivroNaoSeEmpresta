<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $fillable = ["nome", "descricao"];

    protected $dates = [];

    public static $rules = [
        "categoria_id" => "unsigned",
        "nome" => "unique",
        "descricao" => "nullable",
    ];

    public $timestamps = false;

    // Relationships

}
