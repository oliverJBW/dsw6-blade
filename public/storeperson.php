<?php
require_once('../src/conection.php');

use Dsw\Blade\Person as Person;
$name = $_POST['name'];

$person = new Person;
$person->name = $name;
$person->save();
header('Location: /persons2.php');

