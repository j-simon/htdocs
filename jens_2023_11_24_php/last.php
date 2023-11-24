<?php
$start= microtime(true); 
echo memory_get_usage() . "\n"; // 



$zahlen=array();

for ($i=1; $i<1_000_000;$i = $i +1) {
    $zahlen[]=100; // 35 MBytes
}

print_r($zahlen);
echo memory_get_usage() . "\n"; // 
sleep(13);
//print_r($zahlen);
$dauer = microtime(true) - $start; 
echo "Verarbeitung des Skripts: $dauer Sek.";
