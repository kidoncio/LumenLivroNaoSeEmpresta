<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $fillable = ["categoria"];

    protected $dates = [];

    public static $rules = [
        "categoria" => "required",
    ];

    public $timestamps = false;

}
