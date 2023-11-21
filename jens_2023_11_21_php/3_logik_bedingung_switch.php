<?php

$wochentag ="Testtag";
// $wochentag ="Montag";
// $wochentag = "Dienstag";
// $wochentag = "Mittwoch";
// $wochentag ="Donnerstag";
// $wochentag = "Freitag";
// $wochentag ="Samstag";
// $wochentag ="Sonntag";

// wechsel
switch ($wochentag) {

    // Wechselfälle:

    case "Montag":
        echo "Monday";
        break;


    case "Dienstag":
        echo "Tuesday";
        break;

        
    case "Mittwoch":
        echo "Wednesday";
        break;
    case "Donnerstag":
        echo "Thursday";
        break;
    case "Freitag":
        echo "Friday";
        break;
    case "Samstag":
        echo "Saturday";
        break;
    case "Sonntag":
        echo "Sunday";
        break;
    default:
        echo "falscher Wochentag!";
        break;
}
