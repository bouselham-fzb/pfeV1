@extends("Admin.base.admin")

@section("css")
@endsection
@section("content")
    <div class="row">
        <div class="col-12 col-md-2">
        </div>
<div class="row" >

<div class="col-12 col-md-6" style="align-content: center">
    <div  class="card-header card-header-primary">
        <h3 style="margin-left: -100px text-align:center" >Modifier votre profil</h3>
    </div>    
    <form action="{{route('agents.update',$user->id)}}" method="post">

        <div class="modal-body">
                @csrf
                @method('PUT')
            

                <div class="form-group">
                    <label for="name">Nom de l'admin</label>
                    <input type="text" class="form-control" name="name" id="name"  value="{{$user->name}}" aria-describedby="nomError">
                    @if ($errors->has('name'))
                        <small id="nomError" class="text-danger form-text text-muted">{{ $errors->first('name') }}.
                        </small>
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
@endsection
@section("js")
@endsection