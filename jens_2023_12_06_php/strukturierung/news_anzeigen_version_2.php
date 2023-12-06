<?php
    $vorname="Jens";

    //echo $vorname;

?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>News anzeigen</title>
    <link href="shared/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1>Die aktuellen Nachrichten</h1>
<?php

    $nachrichten = unserialize(file_get_contents('nachrichten.txt'));
foreach ($nachrichten as $n): ?>
    <h2><?= $n['titel'] ?></h2>
    <p class="inhalt"><?= $n['inhalt'] ?></p>
    <p class='autor'>geschrieben von <?= $n['autor'] ?> am <?= $n['datum'] ?></p>
    <?php endforeach; ?>
</body>

</html>