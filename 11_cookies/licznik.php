<?php
  if (!isset($_COOKIE['licznik'])) {
    $licznik = 1;
  }else {
    $licznik = $_COOKIE['licznik'];
    $licznik++;
  }
  $dni = 5;
  setcookie('licznik', $licznik, time()+60*60*24*$dni);

 ?>
<!DOCTYPE html>
<html lang="pl" >
  <head>
    <meta charset="utf-8">
    <title>Licznik</title>
  </head>
  <body>
    <?php
    //echo "$_COOKIE[licznik]";
    if ($licznik == 1) {
      echo "Liczba odwiedziń w ciągu $dni dni: <span style=\"color:red\">$licznik</span> raz";
    }else {
      echo "Liczba odwiedziń w ciągu $dni dni: <span style=\"color:red\">$licznik</span> razy";
    }

    echo "<p><a href=\"./wyzerujLicznik.php?usun=1\">wyzeruj licznik</a></p>";
     ?>
  </body>
</html>
