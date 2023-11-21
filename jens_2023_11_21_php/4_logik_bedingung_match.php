<?php

$wochentag = "Testtag";
// $wochentag ="Montag";
// $wochentag = "Dienstag";
// $wochentag = "Mittwoch";
// $wochentag ="Donnerstag";
// $wochentag = "Freitag";
// $wochentag ="Samstag";
// $wochentag ="Sonntag";

$uebersetzung = match ($wochentag) {
    "Montag" => "Monday",
    "Dienstag" => "Tuesday",
    "Mittwoch" => "Wednesday",
    "Donnerstag" => "Thursday",
    "Freitag" => "Friday",
    "Samstag" => "Saturday",
    "Sonntag" => "Sunday",
    default => "falscher Wochentag!"
};

echo $uebersetzung;
