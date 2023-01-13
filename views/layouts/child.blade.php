@extends('layouts.master')

@section('titulo', 'Mi titulo')

@section('menu')
@parent
<ul>
    <li><a href="#">Provedores</a></li>
    <li><a href="#">Section2</a></li>
</ul>
@endsection

@section('contenido')
    <p>Hola</p>
    <p>¿Que tal?</p>
@endsection