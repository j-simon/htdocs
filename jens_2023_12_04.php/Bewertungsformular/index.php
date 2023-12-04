<?php
session_start();

require_once("inc/config.php");
require_once("inc/functions.php");

$meldung = $_SESSION['meldung'] ?? "";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewertungsformular</title>
</head>

<body>
    <h4><?php echo $meldung; ?></h4>
    <h1>Bewertungsformular</h1>
    <form action="verarbeite.php" method="POST">
        <label>Username</label><br>
        <input type="text" name="username"><br>
        <label>Email</label><br>
        <input type="text" name="email"><br>
        <label>Rating</label><br>
        <input checked type="radio" value="schlecht" name="rating">😒
        <input type="radio" value="neutral" name="rating">🙂
        <input type="radio" value="gut" name="rating">😂<br>
        <label>Comment</label><br>
        <textarea name="comment"></textarea><br>
        <button type="submit">Save Feedback</button>
    </form>
    <br>

    <!-- statistic -->
    <?php
    $alleKommentare = getRatings();

    $anzahlSchlecht = 0;
    $anzahlNeutral=0;
    $anzahlGut=0;
    $anzahlReviews = count($alleKommentare);

    foreach ($alleKommentare as $kommentar) {
        if ($kommentar['rating'] === "schlecht")
            $anzahlSchlecht += 1; // $anzahlSchlecht++;
        if ($kommentar['rating'] === "neutral")
            $anzahlNeutral += 1; 
        if ($kommentar['rating'] === "gut")
            $anzahlGut += 1; 

    }

    ?>
    <div>Saved Reviews: <?= $anzahlReviews ?></div>

    <div>😒 <?= round($anzahlSchlecht / $anzahlReviews * 100,0) ?> %</div>
    <div>🙂 <?= round($anzahlNeutral / $anzahlReviews * 100,0)?> %</div>
    <div>😂 <?= round($anzahlGut  / $anzahlReviews * 100,0) ?> %</div>

    <br>

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
           $alleKommentare = getRatings();

            foreach ($alleKommentare as $kommentar) { ?>
                <tr>
                    <td>
                        <?php echo $kommentar['username']; ?>
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
            <?php } ?>
        </tbody>
    </table>
</body>

</html>