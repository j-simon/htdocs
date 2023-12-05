<?php

function getRating(String $eingabe): String
{
    // 
    // if - else
    // switch case
    // match

    $smiley = match ($eingabe) {
        "schlecht" => '😒',
        "neutral" =>  '🙂',
        "gut" => '😂',
        default => '-',
    };

    return $smiley;
}


function getRatings()  {
    if (file_exists(FILE_NAME))
    $alleKommentare = unserialize(file_get_contents(FILE_NAME)); // ja : also alle lesen
    else
    $alleKommentare = []; // nein , mit leerem Array starten

    return $alleKommentare;
}