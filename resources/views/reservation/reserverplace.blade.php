<!doctype html>
<html lang="en">

  <head>
    <title>reservation place</title>
    <head>
        <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href={{asset("reserdist/fonts/icomoon/style.css")}}>
    
        <link rel="stylesheet" href={{asset("reserdist/css/bootstrap.min.css")}}>
        <link rel="stylesheet" href={{asset("reserdist/css/bootstrap-datepicker.css")}}>
        <link rel="stylesheet" href={{asset("reserdist/css/jquery.fancybox.min.css")}}>
        <link rel="stylesheet" href={{asset("reserdist/css/owl.carousel.min.css")}}>
        <link rel="stylesheet" href={{asset("reserdist/css/owl.theme.default.min.css")}}>
        <link rel="stylesheet" href={{asset("reserdist/fonts/flaticon/font/flaticon.css")}}>
        <link rel="stylesheet" href={{asset("reserdist/css/aos.css")}}>
    
        <!-- MAIN CSS -->
        <link rel="stylesheet" href={{asset("reserdist/css/style.css")}}>
<style>
        body, html {
            height: 100%;
          }
          
          * {
            box-sizing: border-box;
          }
          
            
          
          /* Add styles to the form container */
          .container {
            position: absolute;
            margin: 20px;

            right: 50%;
            max-width: 300px;
            padding: 16px;
            background-color: white;
          }
          
          /* Full-width input fields */
            input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
          }
          
          input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
          }
          
          /* Set a style for the submit button */
          .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
          }
          
          .btn:hover {
            opacity: 1;
          }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:width">
            <img src={{asset("dist/img/new_logo.png")}} width="50px" height="50px" class="img-circle elevation-3">
    
                <a class="navbar-brand" href="{{ asset('reservation.index') }}">Mypark</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="nav"  id="navbarNav">
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

              <div class="page-header login-page header-filter" filter-color="black" style="background-image: url({{asset('resedist/images/black.jpg')}}); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
    
                <div class="container" style="height: auto;">
                    <div class="row align-items-center" style="width: 550px">
                      <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
                        
            
                <div class="row justify-content-center">
                        <div class="card" style="width: 450px">
                            <div class="card-header text-center">MyPark</div>
            
                            <div class="card-body" style="width: 400px">
                                <form method="POST" action="{{ route('voitures.store') }}">
                                    @csrf
                                    <div class="card card-login card-hidden mb-3">
                                        <div class="card-header card-header-primary text-center">
                                          <h4 class="card-title"><strong>Réservation</strong></h4>
                                        </div>
                                    </div>
            
                                    <div class="form-group row align-text-center" style="width: 300px;">
                                        <label for="matricule">Matricule</label>
                                    
                                            <div class="input-group" style="width: 300px">
                                              <div class="input-group-prepend">
                                             
                                            <input id="matricule" type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule"  required placeholder="votre matricule..." autofocus style="width: 350px; margin-left:30px">
            
                                            @error('matricule')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                      
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger" style=" border-radius:10px; width:200px; margin-left:100px" onclick="return confirm('Confirmer votre réservation svp!!!')">valider</button>

        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>




    </body>
    
    
    </html>