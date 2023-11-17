<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=<ßphp, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // Operationen , Operator

  // Arithmetische Operatoren für die Grundrechenarten
  // * Multiplikation
  // / Divison / Komma DIV Ganzahlen
  // * Addition
  // - Subtraktion
  // % Modulus / Modulo
  // ** Potenzoperator 
  echo 3 * 4;
  echo "<br>";

  echo 3 / 4;
  echo "<br>";

  echo 3 + 4;
  echo "<br>";

  echo 3 - 4;
  echo "<br>";

  echo 3 % 4; // 3
  echo "<br>";

  echo 10 % 4; // 2
  echo "<br>";


  echo 72 % 13; // 72-13 = 59 -13 = 46 -13 =33 -13 = 20 -13 = 7
  echo "<br>";


  echo 5 ** 3; // Potenzrechner 5³ = 125
  echo "<br>";


  $preis = 975.00;

  echo $preis * 1.19; // 1160.2500
  echo "<br>";
  // logisches Operatoren
  // < kleiner
  // <=
  // > groesse
  // >=
  // != 	ungleich
  // == gleich   Wert1 == Wert2   1==3
  //                              1 == "3"
  // === gleich(strenges gleich) 
  //         Wert1 == Wert2          1 === 3
  //         Datentype1 == Datentype2   1 === "3"
  //  975.00 > 2000 // false

  /*1 1 true
      0 false */

  // $preis= 1160.25
  echo $preis < 2 * 1000; // 1 true , richtig
  echo "<br>";

  echo $preis > 2 * 1000; //   false , falsch
  echo "<br>";



  // operatoren Zeichenketten / string
  // . Concatenation - Operator
  // . ist der Verkettungs-Operator
  $vorname = "Jens"; // Tim
  $nachname = "Simon"; // Schmitz

  $meldung = "Hallo lieber $vorname $nachname, wie geht es dir";
  //$meldung = 'Hallo lieber $vorname $nachname, wie geht es dir';
  $meldung = "Hallo lieber " . $vorname . " " . $nachname . ", wie geht es dir";
  $meldung = "Hallo lieber {$vorname} {$nachname}, wie geht es dir";
  $meldung = "Hallo lieber ${vorname} ${nachname}, wie geht es dir";

  echo $meldung;
  echo "<br>";
  // Hallo lieber Jens Simon, wie geht es dir

  echo "fertig";
  ?>
</body>

</html>

