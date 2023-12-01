<?php
session_start(); // Browser wird mit ID zum Server verknüpft

// für den Start-Aufruf bekommen wir immer ein leeres Array 
// Array ( ) 

// für das abgesendete Formular bekommen wir ein gefülltes Array
// Array ( [vorname] => Jens ) 

if(empty($_GET)) {
    // leeres Array


} else {
    // gefülltes Array

    // speichern , mit der Technik Session
    // 1. nicht vergessen: session_start() nach oben in JEDER Datei 
    // 2. wert speichern
    $_SESSION['vorname'] = $_GET['vorname'];

}

 print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_SESSION['vorname'])) { ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        Vorname: <input type="text" name="vorname"><br>
        <button type="submit">login</button>
    </form>
   <?php }?>
    
   <?php if(isset($_SESSION['vorname'])) { ?>
    <h4>Willkommen <?php echo  $_SESSION['vorname']; ?></h4>
   <a href="ausloggen.php">ausloggen</a>
    <?php }?>
</body>

</html>