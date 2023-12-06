<?php
require_once("functions.php");
// scope ist der Geltungsbereich von Variablen
// scope Hauptprogramm
$dateiNachrichten = 'nachrichten.txt';
$dateiAdressen = 'adressen.txt';


// scope Hauptprogramm
zeigeArrays($dateiNachrichten );

zeigeArrays($dateiAdressen);


$dateiNachrichten = 'mysql:localhost';
$dateiAdressen = 'adressen.txt';