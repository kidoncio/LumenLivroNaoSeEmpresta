<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestado extends Model {

    protected $fillable = ["nome", "livro_id"];

    protected $dates = [];

    public static $rules = [
        "nome" => "required",
        "livro_id" => "required|numeric"
    ];

    public $timestamps = false;

    public function livro()
    {
        return $this->belongsTo("App\Livro");
    }
}
