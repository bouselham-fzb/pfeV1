@extends("Admin.base.agent")

@section('css')
@endsection
@section('content')
    <div class="row">
        
            <div class="col-12 col-md-2">
            </div>
            <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="sel1">Numéro de place</label>
                <select class="form-control" id="sel1" name="codeplace" style="background-color:#FFF5EE;color:black">

                   
                    @foreach ($park->places as $place)
                        <option>{{ $place->codeplace }}</option>
                        
                        @endforeach


                    </select>
                </div>
            
                @foreach($park->places as $place) @endforeach

            <form action="{{ route('places.destroy', $place->id) }}" method="post">
                @csrf
                @method('DELETE')
                
                

<button type="submit" class="btn btn-danger" style=" border-radius:10px"
onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"
    aria-hidden="true"></i>delete</button>
</form>
        </div>
        <div class="col-12 col-md-6">

        <div  class="card-header card-header-primary">
        <h3 style="text-align:center">Ajouter une place</h3>

        <form action="{{ route('places.store') }}" method="post" style="margin-left: 170px ">
            @csrf



            <div class="form-group">
                <label for="code">Numéro de place</label>
                <input type="text" class="form-control" style="background-color:#FFF5EE ;color:black " name="codeplace" id="code" aria-describedby="codeError">
                @if ($errors->has('codeplace'))
                    <small id="codeError" class="text-danger form-text text-muted">{{ $errors->first('codeplace') }}.
                    </small>
                @endif
            </div>
            <div class="form-group">
                <label for="etat">Etat</label>
                <input type="number" class="form-control" name="etat" style="background-color:#FFF5EE ;color:black " id="etat" aria-describedby="etatError" value="0"
                    >
                @if ($errors->has('etat'))
                    <small id="etatError" class="text-danger form-text text-muted">{{ $errors->first('etat') }}.
                    </small>
                @endif
            </div>
            <div class="form-group">
                <label for="park">Parking</label>
                <input type="text" class="form-control" style="background-color:#FFF5EE ;color:black " name="nomparking" value="{{ $park->nomparking }}" id="park"
                    aria-describedby="codeError" >
                @if ($errors->has('nomparking'))
                    <small id="codeError" class="text-danger form-text text-muted">{{ $errors->first('nomparking') }}.
                    </small>
                @endif
            </div>


            <button type="submit" class="btn btn-primary">Save</button>

        </form>

    </div>
</div>

      
    </div>


@endsection
@section('js')
@endsection
