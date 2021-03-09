<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Admindek | Admin Template</title>
      {{-- Meta --}}
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      {{-- Favicon icon --}}
      <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
      {{-- Google font--}}     
      <link href="{{ asset('fonts.googleapis.com/css0f7c.css?family=Open+Sans:300,400,600,700,800') }}" rel="stylesheet">
      <link href="{{ asset('fonts.googleapis.com/css1180.css?family=Quicksand:500,700') }}" rel="stylesheet">
      {{-- Required Fremwork --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
      {{-- waves.css --}}
      <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      {{-- feather icon --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}">
      {{-- themify-icons line icon --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
      {{-- ico font --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
      {{-- Style.css --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages.css') }}">


  </head>

  <body themebg-pattern="theme1">
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
  <section class="login-block">
        {{-- Container-fluid starts --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    {{-- Authentication card start --}}
    
                    <form class="md-float-material form-material">
                        <div class="text-center">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left">Recover your password</h3>
                                    </div>
                                </div>
                                
                                <div class="form-group form-primary">
                                    <input type="text" name="email-address" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Reset Password</button>
                                    </div>
                                </div>
                                <p class="f-w-600 text-right">Back to <a href="auth-sign-in-social.html">Login.</a></p>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="../index-2.html"><b>Back to website</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/images/auth/Logo-small-bottom.png') }}" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{--<div class="login-card card-block auth-body mr-auto ml-auto">--}}
                        {{--<form class="md-float-material form-material">--}}
                            {{--<div class="text-center">--}}
                                {{--<img src="{{ asset('assets/images/logo.png" alt="logo.png">--}}
                            {{--</div>--}}
                            {{--<div class="auth-box">--}}
                                {{----}}
                            {{--</div>--}}
                        {{--</form>--}}
                        {{--&lt;!&ndash; end of form &ndash;&gt;--}}
                    {{--</div>--}}
                    {{-- Authentication card end --}}
                </div>
                {{-- end of col-sm-12 --}}
            </div>
            {{-- end of row --}}
        </div>
        {{-- end of container-fluid --}}
    </section>

    {{-- Required Jquery --}}
    <script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/popper.js') }}/js/popper.min.js') }}"></script>
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
