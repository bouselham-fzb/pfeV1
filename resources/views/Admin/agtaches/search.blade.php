<form action="{{route('newstationnements.search')}}" class="d-flex mr-3 mr-1">
    <div class="position-relative" style="left: 900px; margin-top: 20px">
     <div class="form-group mb-0">
      <input type="text" name="q" class="form-control" value="{{request()->q ?? ''}}" style="background-color: white; color:black" placeholder="matrcule...">
    </div>
    <span><button type="submit" class="btn btn-info"><i  class="fa fa-search" aria-hidden="true"></i></button>
    </span>

</div>
</form>