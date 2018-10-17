<?php
  session_start();
  if(isset($_SESSION['login'])){
    header ('location: ./zalogowany.php');
  }
 ?>

<!DOCTYPE html>
<html lang="pl" >
  <head>
    <meta charset="utf-8">
    <title>System logowania</title>
    <link rel="stylesheet" href="./style.css" type="text/css">
  </head>
  <body>
    <?php
    if (isset($_GET['wylogowany'])) {
      echo '<div class="aqua">Wylogowałeś się</div>';
    }
    if (isset($_SESSION['blad'])) {
      echo '<div class="czerwony">'.$_SESSION['blad'].'</div>';

    }
     ?>
    <form action="zalogowany.php" method="post">
      <input type="text" name="login" placeholder="Login"><br>
      <input type="password" name="pass" placeholder="Hasło"><br>
      <input type="submit" name="przycisk" value="Zaloguj się">
    </form>
  </body>
</html>
