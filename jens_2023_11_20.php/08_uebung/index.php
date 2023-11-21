<?php

/*var_dump(intval(12345)); // int 12345

var_dump(intval("A4567")); // int 0

var_dump(intval("100Jens")); // int 100

var_dump(intval("Jens")); // int 0
*/
echo substr("Jens Simon",5); // "?" "Simon"
echo "\n";
echo substr("Jens Simon",0,4); // "?" "Jens"
echo "\n";
echo substr("abcdefgh",1,-5); // bc