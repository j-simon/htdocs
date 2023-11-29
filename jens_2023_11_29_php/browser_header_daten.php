<?php

//print_r($_SERVER);

// echo  $_SERVER['HTTP_ACCEPT_LANGUAGE'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <a href="setze_cookie_en.php">englisch</a> <a href="setze_cookie_de.php">deutsch</a>
    <?php

    // gibt es cookie einstellung für die sprache
    $sprache = $_COOKIE["sprache"] ?? "";

     if (!empty($sprache)) {
        // wunsch der sprache über den cookie
        if (substr($sprache, 0, 2) === "de") {
            echo "Willkomen!";
        } else if (substr($sprache, 0, 2) === "fr") {
            echo "Accueillir !";
        } else {
            echo "Welcome!";
        }
    } else {
        // automatik für die sprache
        if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) === "de") {
            echo "Willkomen!";
        } else if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) === "fr") {
            echo "Accueillir !";
        } else {
            echo "Welcome!";
        }
    }
    ?>
</body>

</html>