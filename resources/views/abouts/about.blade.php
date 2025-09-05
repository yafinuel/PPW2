@extends('layouts.app')

@section('title', 'About')
@section('judul', 'Tentang saya')

@section('content')
    <p>Penulis: {{$nama}} </p>
    <p>NIM: {{$nim}} </p>
    <p>Kelas: {{$kelas}} </p>
@endsection