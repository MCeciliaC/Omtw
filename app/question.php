<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //public $table = "questions";
    //public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
