<?php

// eigene Funktion 
function getWelcome($firstName,$surname,$city="unknown") {

    $anredeWillkommen="Welcome, dear $firstName $surname from $city\n";
    //echo $anredeWillkommen;
    return $anredeWillkommen;
}


// Don't repeat yourself
/*
$vorname = "Jens";
$nachname="Simon";

// Anrede willkomen
$anredeWillkommen="Herzliche Willkomen lieber $vorname $nachname\n";

echo $anredeWillkommen;


$vorname = "Tim";
$nachname="Schmitz";

// Anrede willkomen
$anredeWillkommen="Herzliche Willkomen lieber $vorname $nachname\n";

echo $anredeWillkommen;
*/
$vorname = "Jens";
$nachname="Simon";

 
echo getWelcome($vorname,$nachname);
echo getWelcome("Kim","Schmitz");

echo getWelcome("Kim","Schmitz","Cologne");
//gettype("100");


function a($b,$c){
//    echo // return
}

