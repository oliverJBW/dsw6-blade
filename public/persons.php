<?php
require_once "../src/conection.php";

use Dsw\Blade\Person as Person;

$persons = Person::all();

foreach($persons as $person) {
    echo "<p>" . $person->name . "</p>";
}