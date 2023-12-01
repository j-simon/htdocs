<?php

if(empty($_GET)) {
    // leeres Array
    $geburtstagAlsTimestamp = "Bitte erst Deine Daten ein";
    $text="";
    $geburtstag="";

} else {
    // gefülltes Array
    $datum = "{$_GET['tag']}.{$_GET['monat']}.{$_GET['jahr']}";
    
    $geburtstagAlsTimestamp = strtotime($datum);
    
    $text = htmlspecialchars(nl2br($_GET['text']));

    $geburtstag=$datum;
   
   $geburtstag= (int) ((time()-strtotime($geburtstag)) /60/60/24/365);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <p>Geburtstag als Timestamp: <?= $geburtstagAlsTimestamp ?><p>
        <p>Geburtstag: <?= $geburtstag ?><p>
        <p>Text:<br><?= $text ?><p>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        Tag: <input type="text" name="tag"><br>
        Monat: <input type="text" name="monat"><br>
        Jahr: <input type="text" name="jahr"><br>
        Text:<textarea name="text"></textarea>
        <button type="submit">login</button>
    </form>
</body>
</html>