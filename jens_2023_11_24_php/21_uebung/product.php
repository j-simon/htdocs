<?php

// Die article id wird aus dem query-parameter des hyperlinks gebildet.
$articleId = (int) $_GET['articleId'];
//echo $articleId; // tum ausprobieren



$products = [
    101 => [
        'name' => 'Cooking Pot',
        'price' => '$10.00'
    ],
    102 => [
        'name' => 'Salt Shaker',
        'price' => '$5.00'
    ],
    103 => [
        'name' => 'Slippers Size M',
        'price' => '$20.00'
    ],
    104 => [
        'name' => 'cat food',
        'price' => '$5.00'
    ],
    105 => [
        'name' => 'Allgäuer Bergkäse',
        'price' => '$10.00'
    ]
];

if (isset($products[$articleId])) {
    $product = $products[$articleId];
} else {
    $product = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    /* hier ist die ausgabe zu machen */
    if ($product !== null) { ?>
        <h1>
            name: <?= $product['name'] ?>
            <br>
            price: <?= $product['price'] ?>
        </h1>
    <?php } else { ?>
        <h1>product not found!</h1>
    <?php } ?>


</body>

</html>