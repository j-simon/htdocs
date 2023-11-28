<?php

//print_r(__DIR__); 
// C:\MAMP\htdocs\jens_2023_11_28_php\dateien_beschreiben_auslesen\daten.txt 

$vorname="Jens";
$vorname2="Tim";

$gesamtDaten =   $vorname.";".$vorname2;
//$gesamtDaten[]=$vorname;
//$gesamtDaten[]=$vorname2;

$filename= __DIR__ . "\daten.txt";

file_put_contents($filename,$gesamtDaten);
?>