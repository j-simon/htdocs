<?php
$laender[0]="Frankreich";
$laender[1]="Schweden";
$laender[2]="Italien";

// "Frankreich,Schweden,Italien"

$text = join(",",$laender); // oder $text = implode(",",$laender);
echo $text;


$array=explode(",",$text);
var_dump($laender);

echo "\nUmwandlung Array zu Text und wieder zu Array";