<?php

// aussen
require_once("schuh.php"); // require() inlcude() include_once()

$meinSchuh = new Schuh();

//var_dump($meinSchuh);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?=$meinSchuh->farbe?></li>
        <li><?=$meinSchuh->groesse?></li>
        <li><?=$meinSchuh->material?></li>
        <li><?=$meinSchuh->typ?></li>
    </ul>
</body>
</html>