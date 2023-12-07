<?php

// aussen
require_once("schuh.php"); // require() inlcude() include_once()

$meinSchuh = new Schuh();
$meinSchuh->setFarbe("blau");
$meinSchuh->setGroesse(9);


$meinSchuh->setMaterial("Plastik");
$meinSchuh->setTyp("Sneaker");

//var_dump($meinSchuh);

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
         <!-- <li> -->
            <?php
             /*
             <?= $meinSchuh->getFarbe()?> 
             */
             ?>
         <!-- </li> -->
         <li><?= $meinSchuh->getFarbe()?></li>
         <li><?= $meinSchuh->getGroesse()?></li>
         <li><?= $meinSchuh->getMaterial()?></li>
         <li><?= $meinSchuh->getTyp()?></li>
    </ul>
</body>
</html>