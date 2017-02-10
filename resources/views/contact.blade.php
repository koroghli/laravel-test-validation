@extends('layouts.app')
@section('page','contact')
@section('title','contact')
@section('content')
  <style media="screen">
    label{
      color: white;
    }
  </style>

<link rel="stylesheet" href="/css/contact.css">
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Contactez-Nous</h1>
          {{ Form::open(['url' => '/contact']) }}
             {{Form::label('name', 'votre Nom')}}<br>
             {{Form::text('name')}}<br><br>
             {{Form::label('email', 'E-Mail Address')}}<br>
             {{Form::text('email')}}<br><br>
             {{Form::label('message', 'Votre message')}}<br>
             {{Form::textarea('message', '3 < 4') }}<br><br>
             {{Form::submit('submit')}}<br>


           {{ Form::close() }}


         </div>
        </div> </div>

    <div class="row">
      <div class="col-md-1">
        <button type="button" name="button" class="btn btn-successes"><a href="/home">Accueil</a></button>
      </div>
    </div>


@endsection
