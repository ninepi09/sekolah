@extends('layouts.siswa')

{{-- config 1 --}}
@section('title', 'Forum | Forum Siswa')
@section('title-2', 'Forum Siswa')
@section('title-3', 'Forum Siswa')

@section('describ')
    Ini adalah halaman Forum untuk siswa
@endsection

@section('icon-l', 'fa fa-clipboard')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('siswa.forum.forum-siswa') }}
@endsection

{{-- main content --}}
@section('content')
