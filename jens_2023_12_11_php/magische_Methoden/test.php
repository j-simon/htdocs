<?php
require_once("person.php");

// Konstruieren eines Objektes
$jens = new Person("Jens");

// Absichtlicher Fehler , Aufruf über Attribut möglich, wenn man in der Klasse protected vergisst!
//$jens->vorname="Jens";

//$jens->setVorname("Jens");
//$jens->setNachname("Simon");



var_dump($jens); // für ein Objekt
//echo $jens."\n"; // wo ist denn jetzt der Fehler des echo??????

$tim = new Person("Tim","Schmitz");
//echo lcfirst($jens)."\n";
var_dump($tim);
//echo gettype($jens);

//echo $jens->getVorname();

$standObjekt = new Person();
var_dump($standObjekt);

$standObjekt = new Person;
var_dump($standObjekt);