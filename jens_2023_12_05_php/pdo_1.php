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
/* die Database muss angelegt und eventuell mit Daten gefüttert werden. 
CREATE DATABASE rating_system;

CREATE TABLE ratings( id INTEGER PRIMARY KEY AUTO_INCREMENT, username VARCHAR(24), email VARCHAR(50), rating VARCHAR(10), comment TEXT );

INSERT INTO ratings(username,email,rating,comment) VALUES('Jens','jens.simon@test.de','neutral','test test');


*/
$db = new PDO('mysql:host=localhost;dbname=rating_system', 'root', 'root');
$statement = $db->query('SELECT * FROM ratings;SELECT * FROM ratings;');


//print_r($alleKommentare);
?>


<!-- Tabelle für Kommentar  -->
<table border="1">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Rating</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            <?php
           //$alleKommentare = getRatings(); // File-Handling
           $alleKommentare = $statement->fetchAll(); // Database_handling
            
            foreach ($alleKommentare as $kommentar) : 
                echo "<tr>";?>
                    <td>
                        <?= $kommentar['username'] ?>
                    </td>
                    <td>
                        <?php echo $kommentar['email']; ?>
                    </td>
                    <td>
                        <?php echo getRating($kommentar['rating']);

                        ?>
                    </td>
                    <td>
                        <?php echo $kommentar['comment']; ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>