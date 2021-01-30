<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    public $table = "password_resets";
    //public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
