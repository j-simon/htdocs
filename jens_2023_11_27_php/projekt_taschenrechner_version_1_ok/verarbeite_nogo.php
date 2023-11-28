<?php

// nichts eingetragen in den Formularfeldern und ohne name-Attribute
/*
leeres Array
Array
(
)
*/
print_r($_GET);

// negatives verarbeiten, automatik durch Schleife ist das gefährliche
$ergebnis=0;
foreach($_GET as $wert){
    $ergebnis = $ergebnis + $wert;
}

echo $ergebnis;
/* 
Array
(
    [zahl1] => // leeres Eingabefeld
)

*/

/*$meinGetArray = []; // oder : array()  // leeres Array
print_r($meinGetArray);
*/