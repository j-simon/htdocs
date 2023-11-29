<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startseite</title>
</head>

<body>
    <p>Bitte 2 verschiedene Browser nutzen, nicht 2 Tabs in einem!</p>
    <?php
    $_SESSION["vorname"]="Jens";

    //echo "Hallo " . $vorname
    ?>
    <a href="page2.php">Seite 2</a>
</body>

</html>