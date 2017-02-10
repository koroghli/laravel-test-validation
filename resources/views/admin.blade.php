@extends('layouts.app')
@section('content')
@section('page','admin')
@section('title','admin_message')

<style media="screen">
  tr,td,table{
    border: 2px solid white;
    width: 100%;
  }
  .container{
    background: rgba(0, 0, 0, 0.6);
    z-index: 1000em;
    height:100vh;
    width: 100vh;
    color: white;
  }
  #row {
    height: 20vh;
  }
  body {
    background: url('/css/images/backpro.jpg');
    background-repeat: no-repeat;
    background-size: cover;

  }
</style>
<body id="body">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>Voila les mesages que vous avez reçu ces derniers temps</h1>
        <div class="row" id="row">

        </div>
        <div class="col-md-4 col-md-offset-2">
          <table>
            <tr>
              <td>Nom</td>
              <td>Email</td>
              <td>Message</td>
            </tr>
              @foreach ($persons as $person)
                <tr>
                  <td>{{$person->name}}</td>
                  <td>{{$person->email}}</td>
                  <td>{{$person->message}}</td>
                </tr>
              @endforeach
          </table>
        </div>
        <div class="row" id="row">
        </div>
      </div>
    </div>
    <div class="">
      <button type="button" name="button" class="btn btn-successes"> <a href="/home">Accueil</a></button>
    </div>
  </div>
</body>
@endsection
