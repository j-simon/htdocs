<?php

/*

// assoziative Array
 
// NEGATIV BEISPIEL
// vorname,nachname, strasse , hausnummer, plz, ort
$adresse=array("Jens","Simon","Teststrasse",42,12345,"Köln");
var_dump($adresse);
echo $adresse[3];

// Positiv BEISPIEL
// vorname,nachname, strasse , hausnummer, plz, ort
*/
$adresse=[];  // so nicht! array("Jens","Simon","Teststrasse",42,12345,"Köln");

$adresse['vorname']="Jens";
$adresse['nachname']="Simon";
$adresse['strasse']="Hauptstrasse";
$adresse['plz']=12345;


//var_dump($adresse);
//echo $adresse['strasse']; // Teststrasse

// wie speichere ich denn eine 2. Adrese in meinem Programme
// 2.dimensionales

// Was kan man mit fertigen Arrays tun
// Hilfsfunktionen: array_
//beispiel: array_pop

echo array_pop($adresse);
var_dump($adresse);
echo $adresse['strasse'];

//array_push($adresse,"12345");
var_dump($adresse);
