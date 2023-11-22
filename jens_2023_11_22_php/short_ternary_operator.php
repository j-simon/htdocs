<?php
/*
$vorname="Jens";

echo $vorname==="Jens" ? "yes":"no";

echo "\n";



$vorname="Tim";

echo $vorname==="Jens" ? "yes":"no";

echo "\n";
*/

// short tenary oder elvis operator
$vorname="Jens";

echo $vorname==="Jens" ?:"no"; // 1 true

echo "\n";

$vorname="Tim";

echo $vorname==="Jens" ?:"no"; // no

echo "\n";

// das der Sinn des short ternary
$vorname=null;

echo $vorname ?:"Unknown User"; 
echo "\n";

$vorname="Jens";

echo $vorname ?:"Unknown User"; 
echo "\n";

