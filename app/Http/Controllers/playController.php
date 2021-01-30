<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Question;
use App\Game;
use App\Level;

class playController extends Controller
{
    public function showQuestions(){
      if(Auth::user()==null){
        return redirect("/login");
      }
      $user= Auth::user(); // identifica usuario

      //TODO(pbaleztena): checkear si el usuario tiene un juego aun valido
      //y mostrar esa partida en vez de crear una nueva

      //===== CREACION DE PARTIDA =====
      $newGame = new Game; // creo nueva partida
      $newGame->user_id = $user->id;
      $newGame->points= 0;
      $newGame->started_at = time();
      $newGame->level_id= Level::find(1)->id;

      //===== GENERACION DE NUEVA PREGUNTA =====
      $q = $this->getRandomQuestion($newGame);
      $question = $q->text;
      $newGame->last_question_id= $q->id;
      $newGame->save(); //guardo nueva partida
      $newGame->questions()->attach($q->id); //guardo la pregunta a la lista de preguntas usadas.


      $vac= compact("question","newGame");
      return view("play", $vac);
    }

    public function answerQuestion($gameId, $button){
      //===== VARIABLES GENERALES =====
      $newGame= Game::find($gameId);  //traigo el objeto partida actual, mediante el parametro $gameId
      $user= Auth::user();     //traigo el usuario

      //===== CALCULO DE TIEMPO =====
      $now=time();    //traigo segundo actual
      $started=$newGame->started_at;  //traigo segundo en el que comenzo la partida actual
      if($now >= ($started+63)){
        return redirect ("/ranking");
      }

      //===== CALCULO DE RESULTADO =====
      $lastQuestion= $newGame->last_question_id;  //traigo el id de la pregunta que fue contestada
      $value=Question::find($lastQuestion)->value;  //recupero el $value de la misma (true o false)
      $level=$newGame->level_id;    //traigo nivel en el que me encuentro
      $points= Level::find($level)->score;    //traigo el score equivalente a ese nivel
      $answer = false;

      if($value == $button){
        $newGame->points += $points;
        $answer=true; //La respuesta fue bien contestada
      } else{
        $newGame->points -= ($points/2);
        if($newGame->points<0){
          $newGame->points=0;
          $answer=false; //La respuesta fue mal contestada
        }
      }
      $oldScore= $user->score;     //traigo el score viejo
      if($oldScore < $newGame->points){    //comparo el viejo score con el logrado en la partida
        $user->score= $newGame->points;
        $user->save();          //si es mayor al viejo, lo guardo
      }

      //===== GENERACION DE NUEVA PREGUNTA =====
      $q = $this->getRandomQuestion($newGame);
      $id = $q->id;
      $question = $q->text; //busco el texto de la pregunta a mandar
      $newGame->last_question_id = $id;
      $newGame->questions()->attach($id);
      $newGame->save();   //guardo el nuevo id de la pregunta a mostrar, para la proxima comparacion

      return compact("question","newGame","answer");
    }

    private function getRandomQuestion($game){
      $allQuestions = Question::all(); //Obtengo todas las preguntas
      $questions = $allQuestions->diff($game->questions); //Remuevo las preguntas que ya se usaron.
      if (count($questions) == 0){
        $questions = $allQuestions;
        $game->questions()->detach(); // Remover todas las preguntas usadas para volver a empezar
      }

      $index=rand(0, count($questions)-1); //Obtengo una pregunta aleatoria
      return $questions[$index];
    }


}
