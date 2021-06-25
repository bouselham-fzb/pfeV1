@extends('reservation.resheader')
@section('content')
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble img-circle elevation-2" src={{asset("dist/img/new_logo.png")}} alt="Mypark" height="60" width="60">
    <a class="navbar-brand" href="{{ asset('accueil') }}">Mypark</a>

  </div>

<div>

</div>
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('reserdist/images/bois.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-3" style="color: tomato">Merci pour votre réservation</h1>
            <p>La durée de réservation ne doit pas dépasser 15 minutes, sinon elle va être automatiquement annulée...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-5 mt-5 text-center" >
    <div class="col-md-12">
      <div class="border-top pt-5">
        <p>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous les droits sont réservés par <a href="#" target="_blank" >Mypark</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
      </div>
    </div>

  </div>
@endsection