<?php
// wie kann man mit lesen und schreiben loeschen?

$filename= __DIR__ . "\daten.txt";


$vornamenGemisch = file_get_contents($filename); // : string
$vornamen = unserialize($vornamenGemisch); //a:2:i....
print_r($vornamen);

// loesche einen Eintrag im Array
array_pop($vornamen);
print_r($vornamen);

// verändere und speichere wieder
$daten=serialize($vornamen);
$filename= __DIR__ . "\daten.txt";

file_put_contents($filename,$daten);