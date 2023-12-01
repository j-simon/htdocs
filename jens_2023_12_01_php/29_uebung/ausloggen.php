<?php
  session_start(); // Browser wird mit ID zum Server verknüpft

  unset($_SESSION['vorname']); 

  header("Location: startseite.php");
?>