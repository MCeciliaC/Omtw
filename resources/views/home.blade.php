@extends('layouts.base')

@section('title',"ONE MINUTO TO WIN")

@section('content')
  <div class="container text-center col-12 col-md-6">
    <h3>@guest Welcome @else Welcome {{ucwords(Auth::user()->name) }}@endguest!! Click Play to start your game or
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">see the rules!!!</button>
    </h3>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">How to Play</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-align-center">
            You will have to answer all the questions that you can within 1 minute, where each correct question will give you 50 points, BUT each wrong question will take you 25 points.
            Be careful, because there are questions of diferent types of categories!
            Now, get ready, set and Go!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container text-center col-sm-12 col-md-10">
  <a href="/play">
    <img src="img/play1.png" class="play" alt="..."/>
  </a><br>
  <img class="brain" src="img/Brain9.png" alt="">
</div>

@endsection
