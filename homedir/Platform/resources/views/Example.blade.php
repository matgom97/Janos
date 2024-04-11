@extends('dashboard.inicio')
@section('user-name')
    {{ $nombre }}
@endsection

@section('user-acronym')
    {{ strtoupper(substr($nombre, 0, 1)) }}
@endsection

@section('content')
@endsection

@section('section')
@endsection