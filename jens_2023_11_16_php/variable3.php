<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // variabel Variable
    // Referenz 
    $zahl1 = 100; // 100
    $zahl2 = &$zahl1; // 100

    echo $zahl1; // 100
    echo "<br>";
    echo $zahl2; // 100

    echo "<br>";

    $zahl1 = 200;
    echo $zahl1; // 200
    echo "<br>";
    echo $zahl2; // 200

    echo "<br>";
    
    // Variablename aus dem wert einer anderen Variabke erzeugen
    $vorname = 100 ; // "Jens";
    echo $$vorname;

    //$$vorname="etwas anderes";// $100  // $Jens
    //echo $$vorname;

    ?>
</body>
</html>
