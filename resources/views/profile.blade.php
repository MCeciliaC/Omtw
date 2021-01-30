@extends('layouts.base')

@section('title',"PROFILE")

@section('content')
    <br><br><br><br><br>
  <div
  class="container text-center col-lg-6 col-md-6 col-sm-10 col-xs-12 mt-5"
  id="puntaje">
  <div class="card text-center">
    <div class="card-header user-img" style="font-weight:bold">
      {{-- <img src="{{((Auth::user()->avatar)==null)?"imgperfil/photo.jpg":Auth::user()->avatar}}" alt="" /> --}}
      {{ucwords(Auth::user()->name) }}'s Profile
      </div>
      @if(session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje')}}
        </div>
      @endif
    <div class="card-body">
      <h5 class="card-title">Congratulations {{ucwords(Auth::user()->name) }}!!,
        you have reached {{Auth::user()->score}} points!!</h5>
      <div>
        <a href="/home" class="btn mt-2 mb-3 abm">Return to main page</a>
      </div>
      <div>
        <a href="/ranking" class="btn mb-3 abm">Go to the ranking</a>
      </div>
      <div>
        <a href="/edition" class="btn abm">Edit user</a>
      </div>
    </div>
  </div>
</div>
@endsection
