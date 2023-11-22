<?php

// Was ist eine Array?
// ein Sammlung von Werten

$vorname1="Jens";
$vorname2="Tim";
$vorname3="Peter";

var_dump( $vorname1);//."\n";
// echo $vorname2."\n";
// echo $vorname3."\n";

// Lösung mit dem Datentyp array
// Variablen die array sind, sollen mit einem Variablennamen im Plural
//$vornamen = ["Jens", "Tim"]; // Variante 1, Kommagtrennte Wertfolge in eckigen Klammern
//var_dump($vornamen);
$vornamen = array("Jens", "Tim", "Peter"); // Variante 2, Kommagtrennte Wertfolge als Argumente der array()-Funktion
//var_dump($vornamen);


$nachnamen=[]; // leeres Array Variante 1
$nachnamen=array(); // leeres Array Variante 2
var_dump($nachnamen);

// Erweiterung der Inhalte mit einem sogennanten index-Operator []
$nachnamen[]="Simon"; // Auto_Incrementierung
var_dump($nachnamen); // 0.te Position oder 0.Index

$nachnamen[]="Schmitz"; // Auto_Incrementierung
var_dump($nachnamen);  // 1. Index

// Index , hier eine Postion/Stelle/Ort

// Einen Einzelwert gezielt ansprechen
echo "An Position Nummer 1 befinden sich der Nachname ".$nachnamen[1];

$nachnamen[1] = "Meier-Schmitz"; // Nachname von Schmitz auf Meier-Schmitz ändern

var_dump($nachnamen);

// assoziative Array
 // vorname,nachname, strasse , hausnummer, plz, ort
 $adresse=array("Jens","Simon","Teststrasse",42,12345,"Köln");
 var_dump($adresse);
 echo $adresse[3];

 /*
 "$key" => "$value" pair
 0 => 100
 1 => 20
 */