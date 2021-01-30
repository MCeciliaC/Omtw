<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class editionController extends Controller
{

    public function editUser(Request $req){
      $id=Auth::user()->id;
      $user=Auth::user();
      if(($req->newName)== null){
        $user->name=Auth::user()->name;
      } else{
        $user->name=$req->newName;
      }
      if(($req->newPass)== null){
          $user->password=Auth::user()->password;
      } else{
      $user->password=Hash::make($req->newPass);
    }

    if(($req->avatar)== null){
        $user->avatar=Auth::user()->avatar;
    } else{
      // $pic= $req->avatar;
      $ruta="imgperfil";
      $file= $_FILES["avatar"]["tmp_name"];
      $nombrearchivo= Auth::user()->id;
      move_uploaded_file($file, $ruta."/".$nombrearchivo.".jpg");
      $ruta= $ruta."/".$nombrearchivo.".jpg";
      $user->avatar=$ruta;
      }
    $user->email= Auth::user()->email;
    $user-> save();
    return redirect("/profile")->with('mensaje', 'Su perfil ha sido editado');
    }
  }
