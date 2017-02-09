@extends('layouts.app')
@section('page','contact')
@section('title','contact')
@section('content')


  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1>Contactez-Nous</h1>
          @if (isset($validation))
           <h2>{{$validation}}</h2>
         @else
          {{ Form::open(['url' => '/contact/email', "id" => "form"])}}
          <div class="form-group">
            {{ Form::label('name', 'Nom : ')}}<br>
            {{ Form::text('name'),['class' => 'form-control']}}<br>
            {{ Form::label('objet', 'Objet :')}}<br>
            {{ Form::text('objet'),['class' => 'form-control']}}<br>
            {{ Form::label('content', 'message :')}}<br>
            {{ Form::textarea('content',null,array("rows" => 4)),['class' => 'form-control']}}<br>
            {{ Form::submit('Envoyer'),['class' => 'btn btn-successes']}}
          </div>

          {{ Form::close() }}
          @endif
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-10 col-md-1">
        <button type="button" name="button"><a href="/home">Accueil</a></button>
      </div>
    </div>

@endsection
