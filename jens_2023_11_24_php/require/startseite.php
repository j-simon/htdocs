<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php 
        // for-loop
        for ($i=1; $i<=5; $i = $i +1) {
            $zahl=$i; 
            require 'li.php' ;
        }

        ?>
    </ul>

    <ul>
        <?php $zahl=1; ?>
        <?php require 'li.php' ?>

        <?php $zahl=2; ?>
        <?php require 'li.php' ?>
        
        <?php $zahl=3; ?>
        <?php require 'li.php' ?>
        
        <?php $zahl=4; ?>
        <?php require 'li.php' ?>
        
        <?php $zahl=5; ?>
        <?php require 'li.php' ?>

    </ul>

    <?php require 'footer.php'; ?>
</body>

</html>