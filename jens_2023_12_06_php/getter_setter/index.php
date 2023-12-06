<?php
require_once ("hardware.php");

$monitorGeradeaus = new Hardware();

$monitorGeradeaus->setPreis(122.66);
$monitorGeradeaus->setGroesse("22 Monitor"); // Zugriff schreiben auf das Property per Setter
$monitorGeradeaus->setFarbe("schwarz");
$monitorGeradeaus->setHersteller("Samsung");
//print_r($monitorGeradeaus);


// Ein Kollege macht aus Versehen eine Preisänderung,
// ungwollt auf 0 Euro (er hat es nicht gemerkt!)

$monitorGeradeaus->setPreis(0); // in der Setter Methode gibt es ein if() das erkannt diesen Fehler!
//$monitorGeradeaus->preis = 0; // Zugriff schreibend auf das porperty



echo "\n\nAusgabe der Objekt-Daten auf der Webseite:\n";

echo $monitorGeradeaus->getPreis()." - ";
echo $monitorGeradeaus->getGroesse()." - ";
echo $monitorGeradeaus->getFarbe()." - ";
echo $monitorGeradeaus->getHersteller()."\n";