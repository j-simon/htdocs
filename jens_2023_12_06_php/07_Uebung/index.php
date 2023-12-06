<?php
require_once ("hardware.php");

$monitorGeradeaus = new Hardware();
//echo "Hauptprogramm: Objekt anschauen\n";
//print_r($monitorGeradeaus);

$monitorGeradeaus->zeigeDatenAn();

//$monitorLinks = new Hardware();
//print_r($monitorGeradeaus);
//print_r($monitorLinks);
//echo $monitorGeradeaus->groesse;
//$assozitivesArray['preis'];