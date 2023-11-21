<?php function outputUpper($string) {
    echo strtoupper($string)."\n";
}

outputUpper('foo');
outputUpper('Jens');

function echoZeilenUmbruch($txt){
    echo $txt."\n";
}

echo (2+4); echo "\n";

echoZeilenUmbruch(2+4);
echoZeilenUmbruch(2+6);