<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestado extends Model {

    protected $fillable = ["date_start", "date_end", "livro_id", "nome", "emprestado"];

    protected $dates = [];

    public static $rules = [
        "date_start" => "date,required",
        "date_end" => "date,required",
        "livro_id" => "required|numeric",
        "nome" => "required",
        "emprestado" => "required",
    ];

    public $timestamps = false;

    public function livro()
    {
        return $this->belongsTo("App\Livro");
    }
}
