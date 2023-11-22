<?php
    // Unsichtbare Datenübertragung von der link-Seite zu diesem PHP-Script
    var_dump($_GET);
    
    echo $_GET['nachname' ] ?? "name nicht angegeben";

    //echo "hallo";