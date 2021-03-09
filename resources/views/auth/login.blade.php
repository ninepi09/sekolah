<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Login</title>
    {{-- Meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon icon --}}
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    {{-- Google font--}}     
    <link href="{{ asset('fonts.googleapis.com/css0f7c.css?family=Open+Sans:300,400,600,700,800') }}" rel="stylesheet">
    <link href="{{ asset('fonts.googleapis.com/css1180.css?family=Quicksand:500,700') }}" rel="stylesheet">
    {{-- Required Framework --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
    {{-- waves.css --}}
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    {{-- feather icon --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}">
    {{-- themify-icons line icon --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
    {{-- ico font --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
    {{-- Style.css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages.css') }}">

    <style>
        .bg-image {
            background-image: url('{{ asset("img/bg-siswa.jpg") }}'); background-size: cover; background-position: top center; min-height:100% !important; height: 100%;
        }
    </style>
  </head>

  <body class="bg-image">
  {{-- Pre-loader start --}}
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  {{-- Pre-loader end --}}
    <section class="login-block mt-5">
        {{-- Container-fluid starts --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    {{-- Authentication card start --}}
                    <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="text-center">
                            <img src="{{ asset('img/logo-putih.png') }}" alt="logo-literasia.png" width="150">
                        </div>
                        <div class="auth-box card shadow">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">{{ __('Login') }}</h3>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">{{ __('Login') }} with your regular account</p>
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">{{ __('Username') }}</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">{{ __('Password') }}</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span for="remember" class="text-inverse">{{ __('Remember Me') }}</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-right f-w-600"> {{ __('Forgot Password?') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                    </div>
                                </div>
                                {{-- <p class="text-inverse text-left">Don't have an account?<a href="auth-sign-up-social.html"> <b>Register here </b></a>for free!</p> --}}
                            </div>
                        </div>
                    </form>
                        {{-- end of form --}}
                    </div>
                    {{-- Authentication card end --}}
                </div>
                {{-- end of col-sm-12 --}}
            </div>
            {{-- end of row --}}
        </div>
        {{-- end of container-fluid --}}
    </section>

    {{-- Warning Section Ends --}}
    {{-- Required Jquery --}}
    <script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- waves js --}}
    <script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>
    {{-- jquery slimscroll js --}}
    <script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    {{-- modernizr js --}}
    <script type="text/javascript" src="{{ asset('bower_components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/modernizr/js/css-scrollbars.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/common-pages.js') }}"></script>
</body>
</html>
