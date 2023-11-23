<?php
//var_dump(isset($_GET['vorname']));
//var_dump(isset($_GET['nachname']));

// Wenn der 'vorname' key aus welchen Gründen auch immer(copy-paste Fehler der URL,
// Tippfehler) nicht gesetzt war,
// kann $_GET['vorname'] nicht benutzt werden (echo  oder Wertzuweisung)
// also vorher mit isset() prüfen und eventuell korrigieren
if (isset($_GET['vorname']) === false)
    $vorname = "vorname nicht gesetzt!";
else {
    $vorname = $_GET['vorname'];
    $vorname = htmlspecialchars($vorname);
}

/*
if (isset($_GET['nachname']) === false)
    $nachname = "nachname nicht gesetzt!";
else {
    $nachname = $_GET['nachname']; //
    $nachname = htmlspecialchars($nachname);
}*/

$nachname = htmlspecialchars($_GET['nachname'] ?? "nachname nicht gesetzt!");








?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Willkommensseite</title>

</head>

<body>
    <h1> Hallo lieber <?php echo $vorname; ?>-<?php echo $nachname; ?></h1>
</body>

</html>



<?php
