<?php
declare(strict_types=1);

function zeigeWillkommensGruss($vorname="n/a", string $nachname="n.a"){
    echo "Hallo $vorname $nachname, sei willkommen!\n";
}

zeigeWillkommensGruss();
zeigeWillkommensGruss("Jens");
zeigeWillkommensGruss("Jens","Simon");

zeigeWillkommensGruss(1,2); // absichtlicher Fehler! 
//zeigeWillkommensGruss("1","2"); 
// gut , stabiler Code
// schlecht, inhaltlich falsch


