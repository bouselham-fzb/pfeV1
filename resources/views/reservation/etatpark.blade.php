@extends('reservation.resheader')
@section("content")
    

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:width">
        <img src={{asset("dist/img/new_logo.png")}} width="50px" height="50px" class="img-circle elevation-3">

            <a class="navbar-brand" href="{{ route('parkliste.index') }}">Mypark</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav" style="margin-right:500px">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ asset('reservation.reservation') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <li><a href="{{ route('parkliste.index') }}" class="nav-link">Nos parkings</a></li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href={{asset("services.html")}} >About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{asset("services.html")}} >Contact</a>
                  </li>
              </ul>
            </div>
          </nav>
     
    
                
              </div>
            </div>
    
          </header>
         
        </div>

        <div class="nonloop-block-13 owl-carousel d-flex">
   
      <table align="center">
        
              @foreach ($parkings as $parking)
              <td>    
            <div class="item-1 h" style="width:400px;height:900px; margin:30px">
                <div class="item-1-contents">
                  <h3>{{$parking->nomparking}}</h3>
                  <ul>
                    <li class="d-flex"><span>adresse</span> <span class="price ml-auto">{{$parking->adresse}}</span></li>
                    <li class="d-flex"><span>places</span><span class="price ml-auto">{{$parking->nbrplaces}}</span></li>
                    <li class="d-flex"><span>disponible</span><span class="badge badge-success" style="margin-left:235px"> oui </span></li>
                    <li class="button"><a href="{{ route('voitures.index') }}" class="btn btn-danger" style="align-content: center" style="width:100px">Réserver</a></li>

                  </ul>
                </div>
            </div>
        </td>
   
            @endforeach
        </table>
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
    </body>
@endsection


