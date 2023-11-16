<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
      username<input type="text" name="username" value="Mr. X" /><br>
      password<input type="password" name="password" value="*****" /><br>
      <input type="submit" value="login" />
    </form>

    <form>
        username <input type="text" name="username" value="<?php echo "Mr. X"; ?>" /><br>
        password <input type="password" name="password" value="<?php echo "geheim"; ?>" /><br>
        <input type="submit" value="login" />
    </form>
</body>

</html>