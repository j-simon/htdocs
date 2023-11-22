<?php

// Dieser Operator wird benutzt,
// um für eine nicht vorhandene Variable zu erkennen und einen Ersatzsituation auszulösen

// die Variable vorname existiert nicht
//$vorname="Tim";

// Der Operator erkennt diese nicht exitierende Variable und führt als Ersatz eine 
// Belegung der Variable username mit dem Ersatzwert "unknown user" durch
$username =  $vorname ?? "unknown user";

echo "Username: ". $username."\n";


// 2. Beispiel
// die Variable vorname existiert jetzt
$vorname="Tim";

// Der Operator erkennt dies und übernimmt den "Tim" als usernamen ins System
// Belegung der Variable username mit vorname
$username =  $vorname ?? "Jens";

echo "Username: ".$username."\n";
