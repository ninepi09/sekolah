@extends('layouts.siswa')

{{-- config 1 --}}
@section('title', 'Logout | Logout Siswa')
@section('title-2', 'Logout Siswa')
@section('title-3', 'Logout Siswa')

@section('describ')
    Ini adalah halaman Logout untuk siswa
@endsection

@section('icon-l', 'fa fa-power-off')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('siswa.logout.logout-siswa') }}
@endsection

{{-- main content --}}
@section('content')
    