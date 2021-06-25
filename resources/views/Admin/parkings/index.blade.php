@extends("Admin.base.admin")

@section("css")
@endsection
@section("content")
    <div class="row">
        <div class="col-12 col-md-2">
        </div>
        <div class="col-12 col-md-6">
            
            <div  class="card-header card-header-primary">
                <h3 style="color:black">Liste des parkings</h3>
            </div>        

            <table class="table table-hover" style="margin-left: -100px">
                <thead>
                <tr>
                    <th>Nom de parking</th>
                    <th>Adresse</th>
                    <th>Nombre de places</th>
                    <th>tarification</th>
                    <th>Actions</th>
                    

                </tr>
                </thead>
                <tbody>
                @foreach($parkings as $parking)
                    <tr>
                        <td> <strong><a href="/parkings/{{ $parking->id }}" style="color:black"> {{$parking->nomparking}} </a> </strong></td>
                        <td>{{$parking->adresse}}</td>
                        <td>{{$parking->nbrplaces}}</td>
                        <td>{{$parking->tarification}}</td>

                        <td>
                            

                               <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" data-toggle="modal" data-target="#editParking{{$parking->id}}"
                                        class="btn btn-primary" style="margin-right:10px; border-radius:10px"><i class="fas fa-edit" aria-hidden="true"></i></button>

                               <form action="{{route('parkings.destroy',$parking->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style=" border-radius:10px" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>

                               </form>
                                      

                            </div>
                           
                            <div class="modal fade" id="editParking{{$parking->id}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel{{$parking->id}}" aria-hidden="true">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel{{$parking->id}}">Update your data</h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <form action="{{route('parkings.update',$parking->id)}}" method="post">

                                       <div class="modal-body">
                                               @csrf
                                               @method('PUT')
                                           
                            
                                               <div class="form-group">
                                                   <label for="nomparking">Nom de parking</label>
                                                   <input type="text" class="form-control" name="nomparking" id="nomparking"  value="{{$parking->nomparking}}" aria-describedby="nomError">
                                                   @if ($errors->has('nomparking'))
                                                       <small id="nomError" class="text-danger form-text text-muted">{{ $errors->first('nomparking') }}.
                                                       </small>
                                                   @endif
                                               </div>
                                               <div class="form-group">
                                                   <label for="adresse">Adresse</label>
                                                   <input type="text" class="form-control" name="adresse" id="adresse"  value="{{$parking->adresse}}" aria-describedby="adrError">
                                                   @if ($errors->has('adresse'))
                                                       <small id="adrError"
                                                              class="text-danger form-text text-muted">{{ $errors->first('adresse') }}.
                                                       </small>
                                                   @endif
                                               </div>
                                               <div class="form-group">
                                                   <label for="nbrplaces">Nombre de places</label>
                                                   <input type="number" class="form-control" name="nbrplaces" id="nbrplaces"  value="{{$parking->nbrplaces}}" aria-describedby="nbrError">
                                                   @if ($errors->has('nbrplaces'))
                                                       <small id="nbrError" class="text-danger form-text text-muted">{{ $errors->first('nbrplaces') }}.</small>
                                                   @endif
                                               </div>
                                               <div class="form-group">
                                                <label for="tarification">Tarification</label>
                                                <input type="number" class="form-control" name="tarification" id="tarification"  value="{{$parking->tarification}}" aria-describedby="tarifError">
                                                @if ($errors->has('tarification'))
                                                    <small id="tarifError" class="text-danger form-text text-muted">{{ $errors->first('tarification') }}.</small>
                                                @endif
                                            </div>
                                           
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                           </button>
                                       
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                
                                       </div>
                                    </form>
                                   </div>
                                </div>

                               </div>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                            </table>
                        </div>
                    
                   



        <div class="col-12 col-md-4" >
            <div  class="card-header card-header-primary">
                <h3 style="margin-left: -100px text-align:center" >Ajouter un parking</h3>
            </div>    
     
            <form action="{{route("parkings.store")}}" method="post">
                @csrf
                <div class="form-size" style="width: 400px">
                <div class="form-group">
                    <label for="nomparking">Nom parking</label>
                    <input type="text" class="form-control" style="background-color:#FFF5EE ;color:black " name="nomparking" id="nomparking" aria-describedby="nomError">
                    @if ($errors->has('nomparking'))
                        <small id="nomError" class="text-danger form-text text-muted">{{ $errors->first('nomparking') }}.
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" style="background-color:#FFF5EE ;color:black " name="adresse" id="adresse" aria-describedby="adrError">
                    @if ($errors->has('adresse'))
                        <small id="adrerror"
                               class="text-danger form-text text-muted">{{ $errors->first('adresse') }}.
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nbrplaces">Nombre de places</label>
                    <input type="number" class="form-control" style="background-color:#FFF5EE ;color:black " name="nbrplaces" id="nbrplaces" aria-describedby="nbrError">
                    @if ($errors->has('nbrplaces'))
                        <small id="nbrError" class="text-danger form-text text-muted">{{ $errors->first('nbrplaces') }}.</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="tarification">tarification</label>
                    <input type="number" class="form-control" style="background-color:#FFF5EE;color:black  " name="tarification" id="tarif" aria-describedby="tarifError">
                    @if ($errors->has('tarification'))
                        <small id="tarifError" class="text-danger form-text text-muted">{{ $errors->first('tarification') }}.</small>
                    @endif
                </div>
                
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
        </div>
    </div></div>
@endsection
@section("js")
@endsection
