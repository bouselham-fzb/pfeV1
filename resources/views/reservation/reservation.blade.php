@extends('reservation.resheader')
@section("content")
    

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo" >
                <div class="frame" style="border:1px solid white; border-style: outset; width:120px;">
                <a href={{asset("index.html")}} style="margin: 10px; text-align:center">Mypark</a>
            </div>
        </div>
    </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="#" class="nav-link">Home</a></li>
                  <li><a href="{{ route('parkliste.index') }}" class="nav-link">Nos parkings</a></li>
                  <li><a href={{asset("about.html")}} class="nav-link">About</a></li>
                  <li><a href={{asset("reservation.html")}} class="nav-link">Réservation</a></li>
                  <li><a href={{asset("contact.html")}} class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('reserdist/images/parkres.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">La solution pour tous vos besoins de stationnement</h1>
              <p>Lorsque vous êtes en déplacement, l'application gratuite ParkMobile vous permet de trouver et de payer facilement un parking sans avoir à revenir en arrière pour alimenter le compteur. Et pour plus de commodité, vous pouvez réserver des places à l'avance.</p>
              <p><a href="{{ route('parkliste.index') }}" class="btn btn-primary">Réserver maintenant</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="img-years">
                <img src={{asset('reserdist/images/parkres1.jpeg')}} width="1000px" alt="Image" class="img-fluid">
                <div class="year">
                  <span>1 <span>mois en <br>excellente service</span></span>
                </div>
              </div>
  
            </div>
            <div class="col-lg-5 ml-auto pl-lg-5 text-center">
              <h3 class="text-center">Bienvenue chez nous!</h3>
              <p class="mb-5 lead">Lorsque vous êtes en déplacement, l'application gratuite Mypark vous permet de trouver facilement un parking. Et pour plus de commodité, vous pouvez réserver des places à l'avance.</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>


      
<div class="espace" style="margin-bottom: 200px">
</div>

<div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('reserdist/images/parkres4.jpg');">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2 class="text-white  primary-color-icon text-center">Mypark</h2>
          <p class="lead text-white mb-5">Nous garons votre véhicule dans notre parking privé, sous constante surveillance. </p>
          <p><a href="#" class="btn btn-primary">Contactez-nous</a></p>
        </div>
      </div>
    </div>
  </div>

  <footer>

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
  </div>
  </footer>
@endsection
