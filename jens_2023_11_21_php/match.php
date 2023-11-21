<?php

function output($txt,$wert) {
    //echo "will ich das wirklich sehen?";
    return $txt.$wert; 
}


$wert=100;


$ergebnis = match($wert) {
    
    100  => output("Dies ist ",$wert),
    default => "default"

};


echo $ergebnis;