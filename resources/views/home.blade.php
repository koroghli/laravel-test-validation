@extends('layouts.app')
@section('title','Accueil')
@section('page','home')
@section('content')
<link rel="stylesheet" href="/css/home.css">
<div class="container">
  <header>
    <div class="row">
      <div class="col-md-12">
        <div id="app">
          <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <ul class="nav navbar-nav navbar-right" id="nav">
                  <span><h1 id="h1">La Pierre Rare</h1></span>
                  <li id="a"><a href="/home">Accueil</a></li>
                  <li><a href="/produit">Produit</a></li>
                  <li><a href="/contact">Contact</a><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
<<<<<<< HEAD

                    <li>
                      <a href="/admin">Messages</a>
                    </li>
                


=======
                  <li><a href="/admin">Messages</a></li>
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4
              </div>
            </div>
          </nav>
      </div>
    </div>
  </header>
  @if (Auth::guest())

         <li><a href="{{ route('login') }}">Se connecter</a></li>
         <li><a href="{{ route('register') }}">S'enregistrer</a></li>
       @else
         <li class="dropdown">
<<<<<<< HEAD
             <a style="color:white ;border:12px soid black;background-color:black"href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
=======
             <a style="color:white ;border:12px soid black;background-color:black;"href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4
                 Utilisateur: {{ Auth::user()->name }}
             </a>

             <ul class="dropdown-menu" role="menu">
                 <li>
                     <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                         Déconnexion
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
                 </li>
             </ul>
         </li>
       @endif
  <div class="row" style="height:10vh">

  </div>
  <main>
    <div class="row">
      <div class="col-md-12">
        <div id="qui">
          <h1>Qui sommes-Nous ??</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        </div>
      </div>
          <div class="row" style="height:10vh"></div>
        <div id="desc">
          <h2>Une Petite Description Sur Nos Produits</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

  </main>
    <div class="row" style="height:10vh"></div>
  <footer>
    <div class="row">
      <div class="col-md-12">
        <div id="qui">
        <h4><p id="p"> Adress: 00 avenue de xxxx ,Lyon </p></h4>
        <h4> <p id="p">Adress-mail: LaPierreRare@gmail.com</p></h4>
        <h4><p id="p">Numero de telephone: 00.00.00.00.00</p></h4>
        <button class="btn btn-successes"type="button" onclick="document.getElementById('demo').innerHTML = Date()">
    La Date d'aujourdh'ui <p id="demo" style="color:white;"></p></button>


      </div>

      </div>

      </div>

    </div>
  </footer>



</div>
@endsection
