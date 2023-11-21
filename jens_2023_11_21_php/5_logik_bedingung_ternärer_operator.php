<?php
// ternärer Operator
// Bedingungsoperator

// if / else 
$alter=3;

if ($alter >= 18) {// 42 > 18 true
    //echo "Du darfst den Führerschein machen!, weil du $alter Jahre alt bist.";
   echo "ja\n";
} else {// ansonsten gib einen anderen Text aus
   // echo "Du darfst den Führerschein NOCH NICHT machen!, weil du $alter Jahre alt bist.";
   echo "nein\n";
}

// mögliche Alternative für if/else mit je einer Anweisung
echo $alter >= 18 ? "ja\n" : "nein\n";


