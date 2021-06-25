@extends("Admin.base.admin")

@section("css")
@endsection
@section("content")
    <div class="row">
        <div class="col-12 col-md-1">
        </div>
        <div class="col-12 col-md-7">
            
            <div  class="card-header card-header-primary">
                <h3 style="color:black">Liste des agents</h3>
            </div>        

            <table class="table" style="margin-left: -100px">
                <thead>
                <tr>
                    <th>agent</th>
                    <th>cin</th>
                    <th>date de recrutement</th>
                    <th>login</th>
                    <th>téléphone</th>
                    <th>nom parking</th>
                    <th>Actions</th>
                    

                </tr>
                </thead>
                <tbody>
                    @foreach($parks as $park)
           
                @foreach($park->users as $user)
                <tr>
                <td> {{ $user->name }}</td>
                <td> {{ $user->cin }}</td>
                <td> {{ $user->recrutement }}</td>
                <td> {{ $user->email }}</td>
                <td> {{ $user->tele }}</td>
                <td> {{ $park->nomparking }}</td>
                <td>
                            

                    <div class="btn-group" role="group" aria-label="Basic example">
                     <button type="button" data-toggle="modal" data-target="#editAgent{{$user->id}}"
                             class="btn btn-primary" style="margin-right:10px; border-radius:10px"><i class="fas fa-edit" aria-hidden="true"></i></button>

                    <form action="{{route('agents.destroy',$user->id)}}" method="post">
                     @csrf
                     @method('DELETE')
                         <button type="submit" class="btn btn-danger" style=" border-radius:10px" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>

                    </form>
                           

                 </div>
                
                 <div class="modal fade" id="editAgent{{$user->id}}" tabindex="-1"
                     aria-labelledby="exampleModalLabel{{$user->id}}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel{{$user->id}}">Update your data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('agents.update',$user->id)}}" method="post">

                            <div class="modal-body">
                                    @csrf
                                    @method('PUT')
                                
                 
                                    <div class="form-group">
                                        <label for="name">Nom de l'agent</label>
                                        <input type="text" class="form-control" name="name" id="name"  value="{{$user->name}}" aria-describedby="nomError">
                                        @if ($errors->has('name'))
                                            <small id="nomError" class="text-danger form-text text-muted">{{ $errors->first('name') }}.
                                            </small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="cin">CIN</label>
                                        <input type="text" class="form-control" name="cin" id="cin"  value="{{$user->cin}}" aria-describedby="cinError">
                                        @if ($errors->has('cin'))
                                            <small id="cinError"
                                                   class="text-danger form-text text-muted">{{ $errors->first('cin') }}.
                                            </small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="recrutement">Date de recrutement</label>
                                        <input type="date" class="form-control" name="recrutement" id="recrutement"  value="{{$user->recrutement}}" aria-describedby="recError">
                                        @if ($errors->has('recrutement'))
                                            <small id="recError" class="text-danger form-text text-muted">{{ $errors->first('recrutement') }}.</small>
                                        @endif
                                    </div>
                                   
                                 <div class="form-group">
                                    <label for="login">Login</label>
                                    <input type="email" class="form-control" name="email" id="login"  value="{{$user->email}}" aria-describedby="logError">
                                    @if ($errors->has('email'))
                                        <small id="logError" class="text-danger form-text text-muted">{{ $errors->first('email') }}.</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" name="password" id="password"  value="" aria-describedby="passError">
                                    @if ($errors->has('password'))
                                        <small id="passError" class="text-danger form-text text-muted">{{ $errors->first('password') }}.</small>
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
            
    @endforeach

              </table>
          </div>
                    
                   



        <div class="col-12 col-md-4" >
            <div  class="card-header card-header-primary">
                <h3 style="margin-left: -100px text-align:center" >Ajouter un agent</h3>
            </div>    
     
            <form action="{{route("agents.store")}}" method="post">
                @csrf
                <div class="form-size" style="width: 400px">
                <div class="form-group">
                    <label for="nomagent">nom agent</label>
                    <input type="text" class="form-control" style="background-color:#FFF5EE; color:black " name="nomagent" id="nomagent" aria-describedby="nomError">
                    @if ($errors->has('nomagent'))
                        <small id="nomError" class="text-danger form-text text-muted">{{ $errors->first('nomagent') }}.
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="cin">cin</label>
                    <input type="text" class="form-control" style="background-color:#FFF5EE;  color:black" name="cin" id="cin" aria-describedby="cinError">
                    @if ($errors->has('cin'))
                        <small id="cinerror"
                               class="text-danger form-text text-muted">{{ $errors->first('cin') }}.
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="date">date de recrutement</label>
                    <input type="date" class="form-control" style="background-color:#FFF5EE;color:black  " name="recrutement" id="date" aria-describedby="dateError">
                    @if ($errors->has('date'))
                        <small id="dateError" class="text-danger form-text text-muted">{{ $errors->first('date') }}.</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="login">login</label>
                    <input type="email" class="form-control" style="background-color:#FFF5EE;color:black  " name="email" id="login" aria-describedby="loginError">
                    @if ($errors->has('login'))
                        <small id="loginError" class="text-danger form-text text-muted">{{ $errors->first('login') }}.</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" class="form-control" style="background-color:#FFF5EE;color:black  " name="password" id="password" aria-describedby="passError">
                    @if ($errors->has('password'))
                        <small id="passError" class="text-danger form-text text-muted">{{ $errors->first('password') }}.</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="tele">téléphone</label>
                    <input type="text" class="form-control" style="background-color:#FFF5EE ;color:black " name="tele" id="tele" aria-describedby="teleError">
                    @if ($errors->has('tele'))
                        <small id="teleError" class="text-danger form-text text-muted">{{ $errors->first('tele') }}.</small>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="sel1">parking</label>
                    <select class="form-control" id="sel1" name="nomparking" style="background-color:#FFF5EE;color:black">
                        @foreach($parks as $park)           
                     <option>{{$park->nomparking}}</option>

                        @endforeach
                      
                    </select>
                  </div>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
        </div>
    </div>
@endsection
@section("js")
@endsection
