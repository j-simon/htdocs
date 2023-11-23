<?php
// This is only an example, the numbers below will
// differ depending on your system
$start= microtime(true); 


echo memory_get_usage() . "\n"; // 

$a = str_repeat("Hello", 10_000_000);
sleep(13);
echo memory_get_usage() . "\n"; // 

unset($a);

echo memory_get_usage() . "\n"; // 

#der zu messende PHP Code ...

$dauer = microtime(true) - $start; 
echo "Verarbeitung des Skripts: $dauer Sek.";

