<?php
require_once('../src/conection.php');

use Dsw\Blade\Person as Person;
$id = $_GET['id'];

$person = Person::find($id);
$person->delete();
header('Location: /persons2.php');
