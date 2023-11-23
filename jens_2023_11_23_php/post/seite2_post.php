<?php
//print_r($_POST);
//print_r($_GET);

print_r($_REQUEST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="color:<?php echo $_REQUEST['farbe']; ?> ;">Hallo</p>
</body>
</html>



