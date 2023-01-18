<?php
require_once('../src/conection.php');
use Dsw\Blade\Person as Person;

$id  = $_GET['id'];

$person = Person::find($id);
echo '<h1>' . $person->id . ' - ' . $person->name . '</h1>';
?>

<form action="updateperson.php?id=<?=$person->id?>" method="post">
    <input type="text" name="name" value="<?=$person->name?>">
    <input type="submit" value="Modificar">
</form>
<a href="deleteperson.php?id=<?=$person->id?>">
    Eliminar
</a>