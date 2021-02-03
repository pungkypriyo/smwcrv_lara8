@extends('layouts.themev1_app_login')

@section('content')
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row"> </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1"><img src="{{ asset('img/logo/smwcrvd_web_logo_73x73.png') }}" alt="branding logo"></div>
                                </div>
                                {{-- <h4 class="card-subtitle line-on-side text-muted text-center font-small-8 pt-2"><span>{{ __('Login') }}</span></h4> --}}
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" method="POST" action="{{route('login')}}" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <input type="text" class="form-control form-control-lg input-lg" id="user-name" name="username" placeholder="Your Username" value="{{ old('username') }}" required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-lg input-lg" id="user-password" name="password" placeholder="Enter Password" required>
                                            <div class="form-control-position">
                                                <i class="fa fa-key"></i>
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-md-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 text-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="">
                                    <p class="float-sm-left text-center m-0">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="card-link">
                                            {{ __('Forgot Your Password?') }}
                                        </a></p>
                                    @endif
                                    {{-- <p class="float-sm-right text-center m-0">New to Moden Admin? <a href="register-simple.html" class="card-link">Sign Up</a></p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
      </div>
    </div>

@endsection
