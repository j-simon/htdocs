<?php

/*function echo ($variable_wert1,$variable_wert2=null,..........){

}
echo 1, "Jens","hallo",false ; // une
*/

// varidische Funktionen
/*
function berechneSumme($a,$b,$c=0,$d=0,$g=0){
    return $a+$b +$c + $d + $g;
}

echo berechneSumme(2,4)."\n";


echo berechneSumme(2,4,6,7,9)."\n";
*/
// Implemenetierung
// spread operator ...
function berechneSumme(...$zahlen){ // [2,4] , [2,4,6,7,9]
    print_r($zahlen);
    $ergebnis=0;
    foreach($zahlen  as $zahl){
        $ergebnis = $ergebnis +$zahl;
    }
    return $ergebnis;
}

// Anwendung
echo( berechneSumme(2,4)."\n"  );


echo(  berechneSumme(2,4,6,7,9,5,6,7,8,9,0)."\n"   );