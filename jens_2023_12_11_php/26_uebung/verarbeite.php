<?php
require("fussball.php");

// für das echte Formular 
//print_r($_POST); // OK
$ball = new Fussball($_POST); 
echo $ball;
echo "\n<br>";



/* TESTBEISPIELE für den Code-Runner */
$ballArray = [
    'farbe' => "orange",
    'durchmesser' => 53
];
$ball = new Fussball($ballArray); //$ballArray);
echo $ball;
echo "\n";
$ballArray = [
    'farbe' => "white",
    'durchmesser' => 153
];
$ball = new Fussball($ballArray); //$ballArray);
echo $ball;
echo "\n";


$ball = new Fussball(
    [
    'farbe' => "green",
    'durchmesser' => 11153
    ]
); //$ballArray);
echo $ball;
echo "\n";




// echo "\n";

// $ballJens= new Fussball("gelb",22);
// //echo $ballJens->beschreibeFussball();
// echo $ballJens;
