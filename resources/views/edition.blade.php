@extends('layouts.base')

@section('title',"Index")

@section('content')
  <br><br><br><br><br>
  <div class="container text-center col-lg-6 col-md-6 col-sm-10 col-xs-12 mt-5" id="puntaje">
  <div class="card text-center">
    <h3>{{ucwords(Auth::user()->name) }}, insert your new data</h3>

    <div class="card-body">
      <form action="/edition" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div>
        <label for="username">New Username</label>
        <input type="text" name="newName" class="username" value=""/> <br><br>
      </div>
      <div>
        <label for="password">New Password</label>
        <input type="password" name="newPass" class="password"/> <br><br>
      </div>
      <div>

        <label>New picture</label>
          <input type="file" name="avatar" /> <br><br> <br>
      </div>
      <input type="submit" class="button" value="Save changes" />

    </div>
  </form>
  </div>
</div>

@endsection
