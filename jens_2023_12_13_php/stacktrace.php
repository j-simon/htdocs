<?php

function a($wert){
    b($wert);
}

function b($wert){
    c($wert);
}

function c($wert){
    d($wert);
}

function d($wert){
    //Call to a member function zeigeDich() on int
    $wert->zeigeDich(); // Fehler ?!
}


// Hauptprogramm
a(42);



