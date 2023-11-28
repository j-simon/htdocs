<?php

$filename= __DIR__ . "\daten.txt";


$vornamenGemisch = file_get_contents($filename); // : string

//Jens-Tim
$vornamen = unserialize($vornamenGemisch); //a:2:i....
print_r($vornamen);
// zeige name 1 und name 2 getrennt
echo $vornamen[0]."\n";
echo $vornamen[1]."\n"; // fehler