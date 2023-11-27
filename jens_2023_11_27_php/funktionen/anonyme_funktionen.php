<?php
// anonym , kein Funktionsname
$begruesse = function ($vorname) {
    return "$vorname sei gegrüßt!";
};

//echo gettype($begruesse);
//var_dump( $begruesse);

echo $begruesse("Jens");

// klassisch  Funktionsname
 function begruesse($vorname) {
    return "$vorname sei gegrüßt!";
};

//echo gettype($begruesse);
//var_dump( $begruesse);

echo begruesse("Jens");


function berechneSumme($a,$b) {
    return $a+$b;
}

function berechneProduk($a,$b) {
    return $a*$b;
}

function berechneAlles($berechnungsfunktion) {
    //return $a+$b;
}
///////////////////////////////////////////////////////////////////////////////
berechneAlles(function(){
    return $a+$b;
});

berechneAlles(function(){
    return $a*$b;
});