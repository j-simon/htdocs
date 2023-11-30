<?php
error_reporting(E_ALL); // hide all warnings and notices
//e cho "hh";

//echo 1 < 0 ? "a": (2 < 8 ?"c":"d");

// echo is_real(100); // notice


//echo $_SERVER;
//e cho "jjj";

// Variable
// $camelCase

// Konstante 
// E_ALL

//define("PI",3.44);
const PI = 3.14;
$text="jj";
echo PI;


function testFunktion(){
    
    //echo $text; // keine lokale oder globale Variable 
    echo PI; // erlaubt, Konstanten sind Super Global !
}

[$preferredLanguage] = explode(
    ',',
    $_SERVER['HTTP_ACCEPT_LANGUAGE'],
    2
); // Array [0] :de [1].. Rest

echo $preferredLanguage;



$zahlen=array(1,2,3);
$meinWert=$zahlen[0];

[$meinWert] = array(1,2,3);
echo $meinWert;


