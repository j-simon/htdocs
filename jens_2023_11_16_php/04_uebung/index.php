<?php

//$wochentage = null;

// . Verknüpfungsoperator für strings
// = Zuweisungsopertor

// .= Zuweisung

// bessere Variante aus Speicher Gründen
$weekdays = "Samstag";
$weekdays = $weekdays . ", Sonntag"; // Langform Zuweisung Konkatenation
$weekdays .=  ", Montag"; // Kurzform Zuweisung Konkatenation .=
echo $weekdays . "\n"; // "Samstag, Sonntag"


// schlechtere Variante aus Speicher Gründen
$weekdays = "Samstag";
$weekdaysNeu = $weekdays . ", Sonntag";
$weekdaysNeuNeu = $weekdaysNeu . ", Montag";
echo $weekdaysNeuNeu . "\n"; // "Samstag, Sonntag"








$weekdays = 'Monday';
$weekdays .= ", Tuesday"; // konkatenieren in Kurzform
$weekdays = $weekdays . ", Wednesday"; // konkatenieren in Langform
$weekdays = $weekdays . ", Thursday";
$weekdays = $weekdays . ", Freitag";
$weekdays = $weekdays . ", Saturday";
$weekdays = $weekdays . ", Sunday";


echo $weekdays;  // Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday