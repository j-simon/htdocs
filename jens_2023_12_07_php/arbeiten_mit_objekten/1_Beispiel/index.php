<?php

require_once("person.php");

$kim = new Person();
$kim->setVorname("kim");
$kim->setNachname("Schmitz");
print_r($kim);
$willkommensText = $kim->beschreibeWillkomenPerson();
$vorname=$kim->getVorname();
$nachname=$kim->getNachname();
$kim->a();

// $jens = new Person();
// $jens->setVorname("Jens");
// $jens->setNachname("Simon");
// print_r($jens);

// $willkommensText = $jens->beschreibeWillkomenPerson();
// $vorname=$jens->getVorname();
// $nachname=$jens->getNachname();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
         <li><?= $vorname?></li>
         <li><?= $nachname?></li>
    </ul>
    <p><?= $willkommensText?></p>
</body>
</html>
