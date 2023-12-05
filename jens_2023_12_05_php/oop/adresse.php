<?php

// Definition der Klasse
class Adresse
{
    // Attribute (nicht: Variable)
    public $strasse;// = "Teststr.";
    public $ort;// = "Köln";
    public $plz;// = "12345";

    // Methoden Funktionalitäten (nicht: Funktion)
    function zeigeAn() {
        return "angezeigt!";
    }
}
/*
 CREATE TABLE adressen 
(
    strasse VARCHAR(100),
    ort VARCHAR(100),
    plz VARCHAR(10)
)*/
