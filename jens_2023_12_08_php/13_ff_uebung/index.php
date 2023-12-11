<?php

require_once("fussball.php");

$ball  = new Fussball();
$ball->setFarbe(("blau"));
$ball->setDurchmesser(100);


echo $ball->getFarbe();
echo "\n";
echo $ball->getDurchmesser();
echo "\n";

$ball = 100;

if ($ball instanceof Fussball)
    $ball->beschreibeFussball();
else 
    echo 'In $ball ist kein Fussball';
