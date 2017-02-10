@extends('layouts.app')
@section('page','contact')
@section('title','contact')
@section('content')

<link rel="stylesheet" href="/css/contact.css">
  <body>
    <div class="container">
      <div class="row">
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

    <div class="row">
      <div class="col-md-1">
        <button type="button" name="button" class="btn btn-successes"><a href="/home">Accueil</a></button>
      </div>
    </div>
  

@endsection
