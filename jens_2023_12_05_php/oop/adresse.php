<?php

// Definition der Klasse
class Adresse
{
    // Attribute (nicht: Variable)
    public string $strasse;// = "Teststr.";
    public string $ort;// = "Köln";
    public string $plz;// = "12345";

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
