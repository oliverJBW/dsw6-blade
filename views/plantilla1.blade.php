<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla 1</title>
</head>
<body>
    <h1>{{ $titulo }}</h1>
    <p>{{ $nombre }}</p>
    <p>{{ time() }}</p>
    <p>{{ $edad }} años</p>
    @if ($edad>=18)
    <p>Contenido para adultos</p>
    @else 
    <p>Viva Bob Esponja!!</p>
    @endif 

    <ul>
    @for ($i=0; $i<$maximo; $i++)
        <li>Elemento {{ $i }}</li>
    @endfor
    </ul>

    @forelse ($aficiones as $aficion)
        <li>{{$aficion}}</li>
    @empty
        <li>No hay aficiones</li>
        <li>Inserta aficiones</li>
    @endforelse
    
</body>
</html>