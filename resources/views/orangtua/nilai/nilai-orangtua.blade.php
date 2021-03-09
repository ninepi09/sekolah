@extends('layouts.orangtua')

{{-- config 1 --}}
@section('title', 'Nilai | Nilai Orangtua')
@section('title-2', 'Nilai Orangtua')
@section('title-3', 'Nilai Orangtua')

@section('describ')
    Ini adalah halaman Nilai untuk Orangtua
@endsection

@section('icon-l', 'fa fa-medal')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('orangtua.nilai.nilai-orangtua') }}
@endsection

{{-- main content --}}
@section('content')
    