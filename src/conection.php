<?php
require "../vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection(([
    'driver' => 'mysql',
    'host' => 'db',
    'database' => 'dbname',
    'username' => 'root',
    'password' => 'test',
    'prefix' => '',
]));

$capsule->bootEloquent();

