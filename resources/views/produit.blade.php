@extends('layouts.app')
@section('page','produit')
@section('title','produit')
@section('content')

<link rel="stylesheet" href="/css/produit.css">
<style media="screen">
body {
  background: url('/css/images/backpro.jpg');

}
</style>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="text-center">Nos Parrures</h1>
          <span><img src="/css/images/par.jpg" alt=""></span>
          <span><img src="/css/images/par1.jpg" alt=""></span>
          <span><img src="/css/images/par2.jpg" alt=""></span>
          <span><img src="/css/images/paru2.jpeg" alt=""></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="text-center">Nos Montres</h1>
          <span><img src="/css/images/mon1.jpg" alt=""></span>
          <span><img src="/css/images/mo2.jpg" alt=""></span>
          <span><img src="/css/images/m3.jpg" alt=""></span>
          <span><img src="/css/images/m4.jpg" alt=""></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="text-center">Nos Boucles</h1>
          <span><img src="/css/images/boucle1.jpg" alt=""></span>
          <span><img src="/css/images/boucle2.jpg" alt=""></span>
          <span><img src="/css/images/bc2.jpg" alt=""></span>
          <span><img src="/css/images/bc3.jpg" alt=""></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="text-center">Nos bracelets</h1>
          <span><img src="/css/images/brc1.jpeg" alt=""></span>
          <span><img src="/css/images/brc2.jpg" alt=""></span>
          <span><img src="/css/images/brc3.jpg" alt=""></span>
          <span><img src="/css/images/brc4.jpg" alt=""></span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-10 col-md-1">
          <button class="btn btn-successes" type="button" name="button" id="btncontact"><a href="/home">Accueil</a></button>
        </div>
      </div>
    </div>

</body>
@endsection
