@extends('layouts.siswa')

{{-- config 1 --}}
@section('title', 'Elearning | Elearning Siswa')
@section('title-2', 'Elearning Siswa')
@section('title-3', 'Elearning Siswa')

@section('describ')
    Ini adalah halaman Elearning untuk siswa
@endsection

@section('icon-l', 'fa fa-desktop')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('siswa.elearning.elearning-siswa') }}
@endsection

{{-- main content --}}
@section('content')
    <!-- <div class="row">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/fullcalendar/css/fullcalendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/fullcalendar/css/fullcalendar.print.css') }}" media='print'>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages.css') }}">
    <style>
        .btn i {
            margin-right: 0px;
        }
    </style>
@endpush

{{-- addons js --}}
@push('js')
    <script type="text/javascript" src="{{ asset('bower_components/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/pages/full-calender/calendar.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
@endpush