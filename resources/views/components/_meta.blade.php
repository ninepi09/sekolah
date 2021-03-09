<title>@yield('title')</title>
{{-- Meta --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- Favicon icon --}}
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
{{-- Google font--}}
<link href="{{ asset('fonts.googleapis.com/css0f7c.css?family=Open+Sans:300,400,600,700,800') }}" rel="stylesheet">
<link href="{{ asset('fonts.googleapis.com/css1180.css?family=Quicksand:500,700') }}" rel="stylesheet">
{{-- Required Fremwork --}}
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
{{-- waves.css --}}
<link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
<!-- themify icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
<!-- ico font -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
{{-- feather icon --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}">
{{-- font-awesome-n --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome-n.min.css') }}">
<!-- simple line icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">
{{-- Chartlist chart css --}}
<link rel="stylesheet" href="{{ asset('bower_components/chartist/css/chartist.css') }}" type="text/css" media="all">
{{-- Style.css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/widget.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">

{{-- Add on CSS --}}
@stack('css')