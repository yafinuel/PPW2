@extends('layouts.app')

@section('title', 'About')

@section('header')
    <h1>Halaman About</h1>
@endsection

@section('content')
    <p>{{$name}}</p>
    <p>{{$email}}</p>
@endsection