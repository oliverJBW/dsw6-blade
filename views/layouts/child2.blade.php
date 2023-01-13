@extends('layouts.master')

@section('titulo', 'Mi titulo')

@section('menu')
@parent
<ul>
    <li><a href="#">Manzana</a></li>
    <li><a href="#">Sandia</a></li>
</ul>
@endsection

@section('contenido')
    @forelse ($frutas as $fruta)
        @include('layouts.fruta')
    @empty
        @include('layouts.vacio', ['elementos' => 'frutas'])
    @endforelse    
    <script>
        console.log('hola mundo');
        let frutas = @json($frutas);
        console.log(frutas);
    </script>
@endsection