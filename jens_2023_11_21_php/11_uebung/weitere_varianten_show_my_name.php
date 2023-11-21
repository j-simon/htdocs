<?php

// Schreibe eine Funktion showMyName(), die deinen Namen ausgibt. Rufe die Funktion auf.
/*
// Schreiben der Funktion
function showMyName() {
    echo "Mein Name ist Jens\n";
}

// Rufe die Funktion auf
showMyName();
*/


// Schreiben der Funktion
// local scope
// Variablen die ab hier auftauche sind nur ab dem f von function und der letzten } Klammer sichtbar / nutzbar/bekannt
function getMyNameWithVorname($vorname) { // "Jens" und "Tim"
    //echo "3 / 6\n";
    //echo "My name is $vorname\n";
    //echo "4 / 7\n";
    //return "My name is $vorname\n";
    $rueckgabe = "My name is $vorname\n";
    return $rueckgabe; // Zurückgebe-Konzept
}

// Rufe die Funktion auf
// globale scope
// Variablen die im Hauptprogramm ausserhalb der Funktion auftauchen, sind in den Funktionen nicht bekannt / nicht sichtbar
//echo "1\n";
$vorname="Jens";

//echo "2\n";
echo getMyNameWithVorname($vorname);

//echo "5\n";
echo getMyNameWithVorname("Tim");


echo "My name is Tim";

?>  