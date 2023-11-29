<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
</head>

<body>
    <p>
        Bitte mit 2 Browser-Fenstern gleichzeitig ausprobieren: <br>
        einmal index_jens.php starten und mit dem anderen Browser index_tim.php starten, dann auf beiden die Seite 2 anklicken.<br>
        Die Seite 2 jeweils danach nochmal aktualisieren.
        <br>
        Da beide Seiten eine name.txt benutzen , ist jeweils der falsche Name gespeichert.
        <br>Dies löst sich besser mit einer Session, die speichert automatisch die Namen jeweils in einer eigenen Datei!

    </p>
    <?php
    $vorname = "Tim";
    file_put_contents(__DIR__ . "/name.txt", $vorname);
    echo "Hallo " . $vorname
    ?>
    <a href="page2.php">Seite 2</a>
</body>

</html>