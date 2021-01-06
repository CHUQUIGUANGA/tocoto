

@extends('layout')
    @section('title',"Usuario {$id}")
@section('content')
    <h1 Style="margin-top:50px;">Usuario id: {{$id}}</h1>
            <p>Mostramos detalles del usuario:{{$id}}</p>
@endsection