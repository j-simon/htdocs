<?php
require_once 'products_array.php';

/* warning programm läuft weiter*/
//include 'products_array_falscher_dateiname.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
</head>

<body>
    <h1>Product Overview</h1>
    <p>Here you can see all the products we offer.</p>

    <ul>
        <?php
        //echo count($products);
        for ($i = 101; $i <= 100 + count($products); $i = $i + 1) { ?>
            <li>
                <a href="product.php?articleId=<?= $i ?>">
                    <?= $products[$i]['name'] ?>
                </a>
            </li>
        <?php } ?>
    </ul>

    <ul>
        <?php foreach ($products as $key => $product) { ?>
            <li>
                <a href="product.php?articleId=<?= $key ?>">
                    <?= $product['name'] ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</body>

</html>