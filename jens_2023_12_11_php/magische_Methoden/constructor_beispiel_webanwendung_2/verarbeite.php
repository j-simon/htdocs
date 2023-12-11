<?php

//var_dump($_POST);

require_once("person.php");

//$person = new Person($_POST['vorname'] , $_POST['nachname']   );
$person = new Person($_POST );
var_dump($person);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($person->getVorname() !== null || $person->getNachname() !== null) { ?>
        <p>Hallo <?= $person ?></p>
    <?php } else { ?>
        <p>Dein Name konnten nicht erkannt werden!</p>
    <?php } ?>
</body>
</html>

