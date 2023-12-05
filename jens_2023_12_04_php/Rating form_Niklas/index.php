<?php
require_once 'inc/config.php';
require_once 'inc/functions.php';

$feedbacks = getFeedback();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>My overview</title>
</head>

<body>
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-3xl space-y-10">
                <?php include 'form.php' ?>
                <?php include 'ratingStatistic.php' ?>
                <?php include 'table.php' ?>
            </div>
        </div>
    </div>
</body>

</html>