@extends("Admin.base.agent")

@section("css")
@endsection
@section("content")
    
@include('Admin.agtaches.search')

<div class="spacer" style="margin-top: 50px ;">

            
                <h3 style="color:black; text-align:center" >La liste des stationnements passés</h3>
                <div class="row">
                    <div class="col-12 col-md-2">
                    </div>
                    <div class="col-12 col-md-8">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Matricule</th>
                    <th scope="col">numéro de place</th>
                    <th scope="col">date d'entrée</th>
                    <th scope="col">date de sortie</th>

                    <th scope="col">état</th>
                  </tr>
                </thead>
            <tbody>
              @foreach ($places as $place)   
              @foreach ($place->stationnements as $stat)   

        
    @if (!empty($stat->tsortie))
        
              <tr>

              <td>{{ $stat->voiture->matricule}}</td>
              <td> {{ $place->codeplace}}</td>

             <td> {{ $stat->tentree}}</td>
             <td> {{ $stat->tsortie}}</td>

            
             <td><span class="badge badge-danger">sorti</span> </td>
              </tr>

              @endif
              

              @endforeach
              @endforeach


                </tbody>
              </table>
            </div>
        </div>
  
                   
      </div>



        
@endsection
@section("js")
@endsection
