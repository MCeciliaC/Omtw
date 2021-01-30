@extends('layouts.base')

@section('title',"ABM")

@section('content')
  <div
  class="container text-center col-lg-8 col-md-8 col-sm-10 col-xs-12 mt-5"
  id="puntaje">
  <div class="card text-center">
    <div class="card-header" style="font-size:25px">
      Question manager
    </div>
    @if(session('mensaje'))
      <div class="alert alert-success">
        {{ session('mensaje')}}
      </div>

    @endif
    <div class="row mb-3 mt-3">
    <div class="col-5 float-right" style="font-size:20px">Questions </div>
    <div class="col-2" style="font-size:20px">Category </div>
    <div class="col-2 float-left" style="font-size:20px">Value </div>
    </div>

    @forelse ($questions as $q)
{{-- <input type="checkbox" name="" value=""> --}}
      <div class="row mb-1">
        <div class="col-5">{{$q['text']}}</div><div class="col-2 ">{{$q['category_id']}}</div><div class="col-2 float-left">{{($q['value']==1)?"True":"False"}}</div>

        <button type="submit" class="btn"><a href="/abm/{{$q->id}}" class="btn" style="font-size:17px">Select</a></button>
        {{-- <button type="submit" class="btn btn-sucess"><a href="/abm/{{$q->id}}">Delete</a></button> --}}
      </div>
    @empty
      <p>No hay preguntas</p>
    @endforelse
    <div class="">
        <form method="post" action="/abm">
          {{ csrf_field() }}
          @if (isset($question))
            @method("patch")
            <input type="hidden" name="id" value="{{$question->id}}">
          @endif
          <input type="text" name="text" class="Question mb-3 col-10" value="{{isset($question)?$question->text:""}}"><br>

    <select class="drop-down menu col-sm-4 " placeholder="Select category" value="" name="category">
  @forelse ($category as $category)
      @if (isset($question) && $question->category_id == $category['id'] )
      <option value="{{$category['id']}}" selected>{{-- {{$category['id']}} --}}{{$category['name']}}</option>
      @else
      <option value="{{$category['id']}}">{{-- {{$category['id']}} --}}{{$category['name']}}</option>
      @endif
  @empty
      <option value="">No hay categorías</option>
  @endforelse

    </select>
    <select class="drop-down menu col-sm-4 " placeholder="Boolean" value="" name="vof">
      @if (isset($question))
        @if ($question->value=="1")
          <option value="1" selected>Verdadero</option>
        @else
          <option value="1">Verdadero</option>
        @endif
        @if ($question->value=="0")
        <option value="0" selected>Falso</option>
        @else
          <option value="0">Falso</option>
        @endif
      @else
        <option value="1">Verdadero</option>
        <option value="0">Falso</option>
      @endif
    </select><br><br>
  </div>
    <div class="mb-3">
      <button type="submit" class="btn" >Save</button>
    </form>
      <form class="" action="/abm" method="post">
        {{ csrf_field() }}
        @if (isset($question))
        @method("delete")
        <input type="hidden" name="id" value="{{$question->id}}">
        @endif
        <button type="submit" class="btn" >Delete</button>
      </form>
    </div>
  </div>
</div>
@endsection
