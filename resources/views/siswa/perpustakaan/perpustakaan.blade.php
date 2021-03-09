@extends('layouts.siswa')

{{-- config 1 --}}
@section('title', 'Perpustakaan | Perpustakaan')
@section('title-2', 'Perpustakaan')
@section('title-3', 'Perpustakaan')

@section('describ')
    Ini adalah halaman Perpustakaan untuk siswa
@endsection

@section('icon-l', 'fa fa-book')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('siswa.perpustakaan.perpustakaan') }}
@endsection

{{-- main content --}}
@section('content')
    