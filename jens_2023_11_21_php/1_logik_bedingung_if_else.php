<?php

// Datentyp für Logik und Bedingung

// Boolean
// Werte: false true , falsch wahr
// Vergleicsoperatore für Zahlen:
// < , <=
// > ,  >=
// == , === Gleichheit / Identtität
// != , !== nicht gleich ungleich

//$alter = 17;
//$alter = 10;
$alter = 42;

// Darf ich den Führerschein für ein Auto machen (18 Jahre)
// 42

//var_dump($alter >= 18 ); // bool(true) ja

// wenn das Alter groesser /gleich dann gib einen Text aus
if ($alter >= 18) {// 42 > 18 true
    echo "Du darfst den Führerschein machen!, weil du $alter Jahre alt bist.";
    echo " Perfekt\n";
} else {// ansonsten gib einen anderen Text aus
    echo "Du darfst den Führerschein NOCH NICHT machen!, weil du $alter Jahre alt bist.";
    echo "nicht so gut\n";
}

// 2. Beispiel mit einer nicht volljährigen Person
$alter = 16;
// wenn das Alter groesser /gleich dann gib einen Text aus
if ($alter >= 18) // 16 >=18 false
    echo "Du darfst den Führerschein machen!, weil du $alter Jahre alt bist\n";
 else { // ansonsten gib einen anderen Text aus
    echo "Du darfst den Führerschein NOCH NICHT machen!, weil du $alter Jahre alt bist\n";
}