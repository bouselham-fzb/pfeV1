@extends('layouts.app')

@section('content')
 




<div class="page-header login-page header-filter" filter-color="black" style="background-image: url({{asset('img/park1.jpg')}}); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
    
    <div class="container" style="height: auto;">
        <div class="row align-items-center">
          <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
            
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">

    <div class="row justify-content-center">
            <div class="card" >
                <div class="card-header text-center">MyPark</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-hidden mb-3">
                            <div class="card-header card-header-primary text-center">
                              <h4 class="card-title"><strong>Login</strong></h4>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email">Email</label>
                           
                           
                           
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fa fa-envelope"></i>
                                    </span>
                                  </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                            <label for="password">password</label>
                           
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa fa-key"></i>
                                </span>
                              </div>

                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>




                          

                    
                           
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>  

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
