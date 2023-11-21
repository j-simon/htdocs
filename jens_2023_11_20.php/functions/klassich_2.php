<?php 
function holeErgebnis(int $zahl1,int $zahl2) : int  { // php >= 7, 8
    //echo"";
        
    $rechenergebnis = $zahl1 + $zahl2;
    return $rechenergebnis ;
}

echo holeErgebnis("a","b");

echo holeErgebnis(2,4);
echo "\n";
echo holeErgebnis(3,6);
echo "\n";

// typisierung möglichkeit
// type hinting Parameter  Variable

function f(int &$x) :int {

    //echo"";
        
    $rechenergebnis = 2 * $x; // integer
    echo gettype($rechenergebnis);
    return $rechenergebnis ; // Rückgabewert - Wert
}


echo f(100); // $x = 100;
echo f(200); // $x = 200;
//echo f("Jens");

$x=100;
$x2 = &$x;

$x=200;
// was ist in $x2 jetzt drin ? auch 200 