@extends('layouts.app')
@section('page','contact')
@section('title','contact')
@section('content')
<<<<<<< HEAD
  <style media="screen">
    label{
      color: white;
    }
  </style>
=======
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4

<link rel="stylesheet" href="/css/contact.css">
  <body>
    <div class="container">
      <div class="row">
<<<<<<< HEAD
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
=======
        <div class="col-md-10 col-md-offset-1">
          <h1>Contactez-Nous</h1>

          <form action="/contact" method="POST">
            <div class="form-group">
              <input type="text" name="name" placeholder="Votre Nom !" class="form-control" value="{{ csrf_token() }}"><br><br>
              <input type="text" name="email" placeholder="Votre Email !" class="form-control" value="{{ csrf_token() }}"><br><br>
              <textarea name="message" rows="4" cols="80" placeholder="Votre Message !" class="form-control" value="{{ csrf_token() }}"></textarea><br><br>
              <button type="submit" name="button" class="btn btn successes" id="btn">submit</button>
            </div>
          </form>
        </div>
      </div>
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4

    <div class="row">
      <div class="col-md-1">
        <button type="button" name="button" class="btn btn-successes"><a href="/home">Accueil</a></button>
      </div>
    </div>
<<<<<<< HEAD

=======
  
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4

@endsection
