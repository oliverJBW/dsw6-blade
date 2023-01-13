<?php
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);

$titulo = "Este es el título";
$nombre = "Pepe Pepon";
$edad = 23;
$maximo = 4;
$aficiones = ['PHP', 'AJAX', 'JS', 'Blade'];

echo $blade->view()->make('plantilla1',compact('nombre', 'titulo', 'edad', 'maximo', 'aficiones'))->render();

