@extends('layouts.siswa')

{{-- config 1 --}}
@section('title', 'Nilai | Nilai Siswa')
@section('title-2', 'Nilai Siswa')
@section('title-3', 'Nilai Siswa')

@section('describ')
    Ini adalah halaman Nilai untuk siswa
@endsection

@section('icon-l', 'fa fa-medal')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('siswa.nilai.nilai-siswa') }}
@endsection

{{-- main content --}}
@section('content')
   