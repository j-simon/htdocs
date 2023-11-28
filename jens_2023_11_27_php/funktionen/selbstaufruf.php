<?php
// Rekursion

/*for()
while()
do while()
foraech()
*/
for ($i = 10; $i > 0; $i = $i = $i-1) {
    echo $i."\n";
}

function zaehle($zahl)
{

    echo "$zahl\n";

    if ($zahl !== 1) zaehle(--$zahl); // selbsaufruf , das ist eine endlos schleife


}

zaehle(10);
