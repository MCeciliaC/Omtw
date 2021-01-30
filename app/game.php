<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Game extends Model
{
    public $table = "game";
    //public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
    protected $hidden = ['questions']; //Escondemos "questions" para que no se envie a javascript cuando retornamos game

    public function questions()
    {
        return $this->belongsToMany('App\Question');
    }
}
