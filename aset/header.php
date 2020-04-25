<?php
session_start();
if (!isset($_SESSION['id_petugas'])) {
  header("Location:http://localhost/karantina/login/index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>APK Karantina</title>
  </head>
  <body>
    <div class="w3-top w3-opacity">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
      <a href="http://localhost/karantina/covid.php" class="w3-bar-item w3-button w3-xlarge">Covid-19</a>
      <!-- Right-sided navbar links. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="http://localhost/karantina/covid.php" class="w3-bar-item w3-button w3-large">Home</a>
        <a href="http://localhost/karantina/pasien/index.php" class="w3-bar-item w3-button w3-large">ODP</a>
        <a href="http://localhost/karantina/login/logout.php" class="w3-bar-item w3-button w3-large">logout</a>
      </div>
    </div>
  </div>

<br><br><br><br><br>
  </body>
</html>
