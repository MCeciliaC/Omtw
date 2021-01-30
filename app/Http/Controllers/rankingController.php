<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class rankingController extends Controller
{
  public function list(){
    $users= User::limit("10")->orderBy("score", "desc")->get();
    $vac= compact("users");
    return view("ranking", $vac);
  }
}
