<?php
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);

$frutas = ['manzana', 'pera', 'uva', 'sandia', 'mandarina'];
//$frutas = [];

echo $blade->view()->make('layouts.child2', compact('frutas'))->render();