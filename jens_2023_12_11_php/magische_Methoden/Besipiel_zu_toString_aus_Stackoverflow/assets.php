<?php

// https://stackoverflow.com/questions/5172261/where-and-why-do-we-use-tostring-in-php

class Assets
{

  protected
    $queue = [];

  public function add($script)
  {
    $this->queue[] = $script;
  }

  public function __toString()
  {
    $output = '';
    foreach ($this->queue as $script) {
      $output .= '<script type="" src="' . $script . '"></script>' . "\n";
    }
    return $output;
  }
}



$scripts = new Assets();

$scripts->add("https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js");
$scripts->add("https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js");
$scripts->add("https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js");


//echo $scripts;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <?= $scripts ?>
</head>

<body>

  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>