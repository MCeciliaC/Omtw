@extends('layouts.base')

@section('title',"Ranking")

@section('content')
  <br><br><br><br><br><br><br>
  <div
  class="container text-center col-lg-8 col-md-8 col-sm-10 col-xs-12 mt-5"
  id="puntaje"
>
  <div class="card text-center">
    <div class="card-header" style="font-weight:bold">
      Top 10:
    </div>

    @forelse ($users as $user)
      <div class="row mb-1">
        <div class="col-6">{{ucwords($user['name'])}}</div>
        <div class="col-6">{{($user['score']== 0)?"No Score":($user['score'])}}</div>
      </div>
    @empty
      <p>No hay usuarios</p>
    @endforelse
    </div>
</div>
@endsection
