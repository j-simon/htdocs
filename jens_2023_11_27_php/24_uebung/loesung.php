<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    $languages = ['PHP', 'Javascript', 'Ruby', 'Python']
?>
<!-- foreach loop -->
<h5> Ausgabe mit der foreach-loop</h5>
<ul>
<?php foreach($languages as $language) {?>
        <li><?= $language ?></li>
<?php } ?>    
</ul>
<br>

<!-- for loop -->
<h5> Ausgabe mit der for-loop</h5>
<ul>
<?php for($i = 0; $i < count($languages); $i++) {?>
        <li><?= $languages[$i] ?></li>
<?php } ?>    
</ul>
<br>

<!-- foreach while -->
<h5> Ausgabe mit der while-loop</h5>
<ul>
<?php
    $i = 0;
    while($i < count($languages)) {?>
        <li><?= $languages[$i] ?></li>
<?php
        $i++;
    } ?>    
</ul>


</body>
</html>