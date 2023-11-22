<?php


   //declare(strict_types=1); // erzeugt einen Fehler bei falschen Datentypen

   function f( int $x,  int $y=1) : int{
      $ergebnis = $x + $y;

      return $ergebnis;
   }

   echo f(1,2); // integers - korrekter Aufruf

   echo f(1.1,2.2); // floats - nicht ganz korrekt - 
                    // erzeugt depraceted oder error meldung je nachdem ob  strict_types deklriert ist,
                    // oder nicht   

   echo f("1.1","2.2"); // strings - nicht ganz korrekt - 
                        // erzeugt depraceted oder error meldung je nachdem ob  strict_types deklariert ist,
                        // oder nicht   
   