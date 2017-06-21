<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model {

    protected $fillable = ["nome"];

    protected $dates = [];

    public static $rules = [
        "autor_id" => "unsigned",
        "nome" => "required",
    ];

    public $timestamps = false;

}
