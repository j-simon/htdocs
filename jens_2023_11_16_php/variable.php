<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Die Variable dient zum "speichern" eines Wertes
// WO WIRD DAS GESPEICHERT IN PHP?
// Im RAM(nicht persistent)

// SQL-Befehl: INSERT INTO benutzer (vorname) VALUES ("Jens") WHERE ...;
// SQL-BEFEHL: SELECT vorname FROM .....
// SQL-Befehl: UPDATE benutzer SET vorname ="Uwe" WHERE ...;
// SQL-BEFEHL: SELECT vorname FROM .....

// WO WIRD DAS GESPEICHERT IN SQL? auf einem Datenträger (persistent)

// Der Name einer Variablen in php beginnt IMMER mit einem $-Zeichen


// Deklaration / Ankündigung, gibt es in PHP NICHT

// Datentyp stellt sich automatisch über den Wert ein

// Initialisierung
$vorname = "Jens"; // Wert zuweisen / Datentyp String
// = ist der Zuweisungsoperator

echo $vorname;


?>
<br>
    <?php

    $vorname = "Uwe"; // Wert zuweisen
    echo $vorname;
    ?>
    <br>
    <?php
        $vorname = "Kim"; // Wert zuweisen
        echo $vorname;
    ?>
    <br>
    <?php

        // loosely-typed variables
        $alter = 12; // Integer
        echo $alter;
    ?>
    <br>
    <?php
        $alter = "12 Jahre"; // String
        echo $alter;


    ?>

<!-- hier ist der vorname ist der vorname nicht mehr gespeicht -->

</body>
</html>