<?php

require_once "Artikel.php";
require_once "Unterprogramm.php";

$artikel = new Artikel();
$artikel->preis="20";
$artikel->save();







Artikel::$bezeichnung="Spülmaschine";


Artikel::loeschen(11);


Artikel::finde(11);



 function power($a,$b) {
    return $a*$b;
}
echo power(3,4);


