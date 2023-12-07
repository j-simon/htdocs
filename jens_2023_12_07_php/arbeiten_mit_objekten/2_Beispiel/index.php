<?php

require_once("person.php");



$jens = new Person();
$jens->setVorname("Jens");
$jens->setNachname("Simon");


$willkommensText = $jens->beschreibeWillkomenPerson();
$willkommensText2 = $jens->beschreibe();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color:red;
        }
    </style>
</head>

<body>

    <p><?= $willkommensText ?></p>
    <p><?= $willkommensText2 ?></p>
</body>

</html>