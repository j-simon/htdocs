<?php



// vergleich
// operator 
// ==(===)

// Hilfsfunktiion var_dump()
// var: Variable
// dump: Speicherauszug

//var_dump(true);

$id = 1;
var_dump($id == 1); // 1 true

$id = 2;
var_dump($id == 1); // 0 false

$vorname = "Rainer";
var_dump($vorname == "Rainer"); // 1 true

$vorname = "Kim";
var_dump($vorname == "Rainer"); // 0 false

$id = 1;
$vorname = "Rainer";

var_dump($vorname == "Rainer" && $id == 2);
  
//
// logischen Operatoren
// AND and    best practice: &&
// OR  or     best practice: ||



