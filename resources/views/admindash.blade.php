@extends('adminbase')

@section('title', 'Dashboard')

@section('content')
@section('header', 'Dashboard')

@if(session('admin'))
    <p>Hello {{ ucfirst(session('admin.name')) }}</p>
@endif
@endsection