<?php
session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seite 2</title>
</head>
<body>
<?php
   
    echo "Hallo ".$_SESSION["vorname"];
    ?>
</body>
</html>