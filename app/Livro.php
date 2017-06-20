<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model {

    protected $fillable = ["titulo", "categoria_id", "autor_id", "autor_id"];

    protected $dates = [];

    public static $rules = [
        "livro_id" => "unsigned",
        "titulo" => "required",
        "autor_id" => "required|numeric",
        "categoria_id" => "required|numeric",
    ];

    public $timestamps = false;

    public function autor()
    {
        return $this->belongsTo("App\Autor");
    }

    public function categoria()
    {
        return $this->belongsTo("App\Categorium");
    }


}
