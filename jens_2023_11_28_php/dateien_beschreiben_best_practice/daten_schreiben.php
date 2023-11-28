<?php

//print_r(__DIR__); 
// C:\MAMP\htdocs\jens_2023_11_28_php\dateien_beschreiben_auslesen\daten.txt 

$vorname="Jens";
$vorname2="Tim";
$vorname3="Anne";
//$vorname4="Otto";
//$gesamtDaten =   $vorname.";".$vorname2;

$gesamtDaten[]=$vorname;
$gesamtDaten[]=$vorname2;
$gesamtDaten[]=$vorname3;
//$gesamtDaten[]=$vorname4;

var_dump($gesamtDaten);

$daten=serialize($gesamtDaten);
$filename= __DIR__ . "\daten.txt";

file_put_contents($filename,$daten);
?>