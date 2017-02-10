@extends('layouts.app')
@section('page','produit')
@section('title','produit')
@section('content')

<link rel="stylesheet" href="/css/produit.css">
<script type="text/javascript"src="https://code.jquery.com/jquery-3.1.1.js"integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style media="screen">
body {
  background: fixed url('/css/images/backpro.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  opacity: 0.9;

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
    <script>
    $(document).ready(function(){
        $("img").click(function(){
            $("img").animate({
                left: '150px',
                height: '150px',
                width: '150px'
            });
            alert('si tu veux savoir nos prix il suffit de nous contacter tu trouveras nos coordonnées sur la page home');
        });
    });
    </script>

</body>
@endsection
