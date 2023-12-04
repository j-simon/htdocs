<?php
session_start();

require_once("inc/config.php");
require_once("inc/functions.php");
//var_dump($_POST);


// wenn das erwartetet Feld nicht da ist, was wollen wir tun?
// Schutz gegen Manipulation der Formular Felder
if (
    !isset($_POST['username']) ||
    !isset($_POST['email'])  ||
    !isset($_POST['rating']) ||
    !isset($_POST['comment'])
) {
    
    header("Location: fehlerseite.php");
    exit;
}



function validateText(String $eingabe,String $name)
{
    echo $eingabe;
    //return $eingabe; // temporär deaktiviert
    
    // negativ
    //  Jens  
    // <b>Jens</b> interpretieren HTML rendern
    // leeres Feld

    // positv
    // Jens
    $eingabe = nl2br(htmlspecialchars(trim($eingabe))); // leeres Feld
    var_dump($eingabe);


    if (!empty($eingabe)) {
        // alles OK
        $_SESSION['meldung'] ="";
        return $eingabe;
    } else {
        // Fehler, leerer Input => Fehlerseite
        $_SESSION['meldung'] = '<div style="color:red">Leeres Feld für '.$name.', bitte korrigieren</div>';
        header("Location: index.php");
        exit;
    }
}


// vorher validieren, aber für jedes Feld einzeln
$username = validateText($_POST['username'],'Username');
$email = validateText($_POST['email'],'Email');
$rating = validateText($_POST['rating'],'Rating');
$comment = validateText($_POST['comment'],'Comment');

// 
$summary = [
    'username' => $username,
    'email' => $email,
    'rating' => $rating,
    'comment' => $comment,
];



// serialisiert speichern

// check: ist die Datei da?
// wie prüfe ich das ?
// mit file_exists()
$alleKommentare = getRatings();

array_push($alleKommentare, $summary); // einen hinzufügen

file_put_contents(FILE_NAME, serialize($alleKommentare)); // schreiben

header("Location: index.php"); // zurück zur Formularseite
