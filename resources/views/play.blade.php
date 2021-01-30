@extends('layouts.base')

@section('title',"PLAY")

@section('head')
<script>
//TIMER
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    var myInterval = setInterval(function () {
        var dingPrueba = document.getElementById("ding")
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = minutes + ":" + seconds;
        if (--timer < 0) {
          clearInterval(myInterval);
          dingPrueba.play();
          var rta = $("#endgame").modal()
        }
    },1000);
}

//CARGA VENTANA E IMPRIME TIMER
window.onload = function () {
    var oneMinute = 59 * 1,
        display = document.querySelector('#time');
    startTimer(oneMinute, display);
  };

async function pruebaV(){
  fetch("/answerQuestion/{{$newGame->id}}/1")
  .then(function(response){
    return response.json();
  })
  .then(function(data){
    // ACA SE TRAE LA NUEVA PREGUNTA Y EL SCORE ACTUALIZADO POR AJAX
    var sonido_false = document.getElementById("audioFalse");
    var sonido_true = document.getElementById("audioTrue");
    document.querySelector("h3").innerHTML = data.question
    document.querySelector("#score").innerHTML = data.newGame.points

   // document.querySelector("#answer").innerHTML ='ID pregunta: '+ data.newGame.last_question_id //esto es para ver abajo, despues se borra
    //console.log(data)
    if(data.answer === true){
        sonido_true.play();//La respuesta fue bien contestada
        document.getElementById("brain").src="img/Brain1.png";
      } else{
        sonido_false.play(); //La respuesta fue mal contestada
        document.getElementById("brain").src="img/Brain6.png";
      }
  })
  .catch(function(error){
    // console.log(error);
  })
};
async function pruebaF(){
  fetch("/answerQuestion/{{$newGame->id}}/0")
  .then(function(response){
    return response.json();
  })
  .then(function(data){
    // ACA SE TRAE LA NUEVA PREGUNTA Y EL SCORE ACTUALIZADO POR AJAX
    var sonido_false = document.getElementById("audioFalse");
    var sonido_true = document.getElementById("audioTrue");
    document.querySelector("h3").innerHTML = data.question
    document.querySelector("#score").innerHTML = data.newGame.points
    //document.querySelector("#answer").innerHTML ='ID pregunta: '+ data.newGame.last_question_id //esto es para ver abajo, despues se borra
    //console.log(data)
    if(data.answer === false){
        sonido_false.play();//La respuesta fue bien contestada
        document.getElementById("brain").src="img/Brain8.png";
      } else{
        sonido_true.play(); //La respuesta fue mal contestada
        document.getElementById("brain").src="img/Brain4.png";
      }
  })
  .catch(function(error){
    // console.log(error);
  })
};

</script>

@endsection

@section('content')
  <div class="modal fade" tabindex="-1" role="dialog" id="endgame" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">TIME'S UP!!!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Do you want to play again?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark"><a href="/play" style="color:white">Yes!!!!</a></button>
          <button type="button" class="btn btn-dark"><a href="/ranking" style="color:white">No,ranking please</a></button>
        </div>
      </div>
    </div>
  </div>

  <div class="container pt-5">
      <audio id="audio" controls autoplay>
        <source type="audio/wav" src="audio/principal.wav">
      </audio>
      <audio id="audioTrue" controls>
        <source type="audio/wav" src="audio/true.wav">
      </audio>
      <audio id="audioFalse" controls>
        <source type="audio/wav" src="audio/false.wav">
      </audio>
      <audio id="ding" controls>
        <source type="audio/wav" src="audio/ding.mp3">
      </audio>
    <div class="row">
	  <div class="col-6"><h2 class="float-left">Score</h2></div>
	  <div class="col-6"><h2 class="float-right">Timer</h2></div>
	  <div class="puntos col-6"><h2  id="score" class="float-left">{{$newGame->points}}</h2></div>
      <div class="col-6"><h2 id="time" class="float-right">01:00</h2></div>
    </div>
  </div>
  <!-- preguntas  -->
  <div class="container text-center col-sm-12 col-md-6 m-auto preguntas">
    <h3 class="text-align-right preguntas">
        {{$question}}
    </h3>
  </div>
    <!-- botones -->
    <div class=" text-center m-auto">
      <button onclick="pruebaV()" class="btn btn-success btn-lg true m-auto">VERDADERO</button>
      <audio id="audioTrue" controls>
        <source type="audio/wav" src="audio/true.wav">
      </audio>
      <button onclick="pruebaF()" class="btn btn-danger btn-lg btn false pl-5 pr-5">FALSO</button>
      <audio id="audioFalse" controls>
        <source type="audio/wav" src="audio/false.wav">
      </audio>

    <div class="container text-center col-sm-12 col-md-10">
      <img class="brain" src="img/Brain10.png" alt="" id="brain">
    </div>

    {{-- <h2>Id partida: {{$newGame->id}}</h2>
    <h2 id="answer"></h2> <br> --}}
  </div>
@endsection
