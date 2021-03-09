@extends('layouts.siswa')

{{-- config 1 --}}
@section('title', 'Cbt | Cbt Siswa')
@section('title-2', 'Cbt Siswa')
@section('title-3', 'Cbt Siswa')

@section('describ')
    Ini adalah halaman CBT untuk siswa
@endsection

@section('icon-l', 'icon-bell')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('siswa.cbt.cbt-siswa') }}
@endsection

{{-- main content --}}
@section('content')
    