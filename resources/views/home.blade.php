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
              </div>
            </div>
          </nav>
      </div>
    </div>
  </header>
  <main>
    <div class="row">
      <div class="col-md-12">
        <h1>Qui sommes-Nous ??</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2>Une Petite Description Sur Nos Produits</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </main>
  <footer>
    <div class="row">
      <div class="col-md-12">
        <h3>adress</h3>
        <h3>adress-mail</h3>
        <h3>numero de telephone</h3>
      </div>

    </div>
  </footer>



</div>
@endsection
