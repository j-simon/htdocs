<?php
//print_r($_GET);

// 1. nur mit diesen Variablen arbeiten
// 2. nur gewollte Inhalte verarbeiten
// 3. sonderfall , Division durch, soll das erklärt werden?


// validate validieren

// sind die felder gefüllt? ja
if (
    // isset($_GET['zahl1']) &&
    // isset($_GET['zahl2']) &&
    // isset($_GET['operation'])
    !empty($_GET)
) {
    // daten aus den formularfelder
    $zahl1 = $_GET['zahl1'];
    $zahl2 = $_GET['zahl2'];
    $operation = $_GET['operation'];


    // ist 12 eine Zahl ? ja, "12" eine zahlenfähige Zeichenkette? ja
    if (is_numeric($zahl1) && is_numeric($zahl2)) //    $zahl2 )
    {
        //$meldung ="ja, das ist ok, beide Zahlen sind da";
        // rechnen
        $zahl1 = (int) $zahl1;
        $zahl2 = (int) $zahl2;
        $meldung = [rechne($zahl1, $zahl2, $operation),rechne($zahl1, $zahl2, $operation)];
    } else {
        $meldung =[ "nein, das reicht nicht","no, thats not enough"];
        // fehlermeldung
    }
    // wenn $zahl1 und/oder $zahl2 keine Zahlen sind,
    // dann können wir nicht verarbeiten, wir geben eine meldungstext aus, der das erklärt

    // wenn die zahlen ok sind, dann muss die operation auch OK sein
    // "+", "-", "*", "/" sind erlaubt
    // alle andere ist verboten, wir geben eine meldungstext aus, der das erklärt



}