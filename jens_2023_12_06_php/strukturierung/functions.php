<?php 
// scope Funktion
/**
 * 
 * Diese Funktion lieste eine Datei ein und zeigt die Daten als Array an.
 */
function zeigeArrays($dateiname) {
    
    
    if (file_exists($dateiname)) { // undefined
        $daten = unserialize(file_get_contents($dateiname));
    } else if (!isset($daten) || !is_array($daten)) {
        $daten = [];
    }

    var_dump($daten);
}

