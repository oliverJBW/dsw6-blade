<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('titulo')</title>
</head>
<body>
    <h1>Master</h1>
    @section('menu')
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Section1</a></li>
        </ul>
    @show    
    
    <div>
        @yield('contenido')
    </div>   
        
</body>
</html>