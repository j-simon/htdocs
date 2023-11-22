<?php

$adresse1 = [
    'id' => 776,
    'vorname' => 'Jens',
    'nachname' => 'Simon'
];

$adresse2 = [
    'id' => 889,
    'vorname' => "Kim",
    'nachname' => 'Schmitz'
];

$adressen = array($adresse1, $adresse2);

var_dump($adressen);

echo $adressen[1]['vorname']." ".$adressen[1]['nachname'];