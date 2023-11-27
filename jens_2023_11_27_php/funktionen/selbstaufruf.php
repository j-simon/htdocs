<?php
// Rekursion

/*for()
while()
do while()
foraech()
*/

function zaehle($zahl){

    echo "$zahl\n";

    if($zahl !== 1) zaehle(--$zahl); // selbsaufruf , das ist eine endlos schleife
    
    
}

zaehle(10);