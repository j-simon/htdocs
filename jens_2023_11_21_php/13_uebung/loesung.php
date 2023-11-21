<?php
 
 // Optionale Parameter

function myExplode($separator="optional",  $text="optional",  $limit="Jens" )  {

    echo $limit."\n";
}
// 1 -> $separator
// 2 -> $text
// keine Wert -> $limit
myExplode();
myExplode(1); // hier fehlt der Wert für den 3. Parameter($limit)
myExplode(1,2,3);