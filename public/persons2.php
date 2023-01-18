<?php
require_once('../src/conection.php');

use Dsw\Blade\Person as Person;
use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);

$persons = Person::all();

echo $blade->view()->make('layouts.persons', compact('persons'))->render();